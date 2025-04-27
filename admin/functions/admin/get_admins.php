<?php
include '../../includes/conn.php';

header('Content-Type: application/json');

$limit = 10;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;
$search = isset($_GET['search']) ? trim($_GET['search']) : '';

try {
    // Modified query to exclude superadmin from results
    if (!empty($search)) {
        $sql = "SELECT `id`, `email`, `fullname`, `created_at`, `avatar`, `last_login`, `status`
                FROM `admin`
                WHERE (fullname LIKE :search OR email LIKE :search)
                AND role != 'superadmin'  -- Exclude superadmin
                LIMIT :limit OFFSET :offset";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':search', '%' . $search . '%');
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);

        // For total count with search
        $total_sql = "SELECT COUNT(*) FROM `admin` WHERE (fullname LIKE :search OR email LIKE :search) AND role != 'superadmin'";
        $total_stmt = $pdo->prepare($total_sql);
        $total_stmt->bindValue(':search', '%' . $search . '%');
        $total_stmt->execute();
        $total_admins = $total_stmt->fetchColumn();
    } else {
        $sql = "SELECT `id`, `email`, `fullname`, `created_at`, `avatar`, `last_login`, `status`
                FROM `admin`
                WHERE role != 'superadmin'  -- Exclude superadmin
                LIMIT :limit OFFSET :offset";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);

        $total_sql = "SELECT COUNT(*) FROM `admin` WHERE role != 'superadmin'";  // Exclude superadmin from count
        $total_stmt = $pdo->query($total_sql);
        $total_admins = $total_stmt->fetchColumn();
    }

    $stmt->execute();
    $admins = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $total_pages = ceil($total_admins / $limit);

    echo json_encode([
        'success' => true,
        'admins' => $admins,
        'total_admins' => $total_admins,
        'total_pages' => $total_pages,
        'current_page' => $page
    ]);
} catch (PDOException $e) {
    echo json_encode([
        'success' => false,
        'message' => 'Failed to fetch admin data'
    ]);
}

?>
