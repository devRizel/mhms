<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Chatbot UI Right Bottom</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      height: 100vh;
      background: url('R.jpg') no-repeat center center/cover;
      position: relative;
    }

    .chatbox {
      position: fixed;
      bottom: 90px;
      right: 30px;
      width: 350px;
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
      overflow: hidden;
      display: flex;
      flex-direction: column;
      z-index: 1000;
      transition: all 0.3s ease;
    }

    .chatbox-header {
      background: linear-gradient(45deg, #7b2ff7, #f107a3);
      color: #fff;
      padding: 20px;
      text-align: center;
      font-weight: bold;
    }

    .chatbox-body {
      padding: 20px;
      text-align: center;
    }

    .chatbox-body input,
    .chatbox-body select {
      display: block;
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 20px;
      border: 1px solid #ccc;
      outline: none;
      font-size: 14px;
      box-sizing: border-box;
    }

    .chatbox-body button {
      width: 100%;
      padding: 10px;
      background: linear-gradient(45deg, #7b2ff7, #f107a3);
      color: white;
      border: none;
      border-radius: 20px;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s ease;
      box-sizing: border-box;
    }
    .bubble {
  text-align: justify;
}
    .chatbox-body button:hover {
      background: linear-gradient(45deg, #f107a3, #7b2ff7);
    }

    .chatbox-footer {
      padding: 10px;
      font-size: 12px;
      color: #aaa;
      text-align: center;
    }

    .chatbox-toggle {
      position: fixed;
      bottom: 30px;
      right: 30px;
      background: linear-gradient(45deg, #7b2ff7, #f107a3);
      color: white;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      font-size: 24px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      box-shadow: 0 5px 15px rgba(0,0,0,0.3);
      z-index: 1001;
    }

    /* Hide chatbox initially */
    .chatbox.hide {
      display: none;
    }

    /* Chat messages style */
    .message {
      display: flex;
      margin-bottom: 10px;
      font-size: 14px;
    }

    .message.user {
      justify-content: flex-end;
    }

    .message.user .bubble {
      background: #7b2ff7;
      color: white;
      border-radius: 20px 20px 0 20px;
      padding: 10px 15px;
      max-width: 70%;
    }

    .message.bot {
      justify-content: flex-start;
    }

    .message.bot .bubble {
      background: #eee;
      color: #333;
      border-radius: 20px 20px 20px 0;
      padding: 10px 15px;
      max-width: 70%;
    }

    /* Responsive Design */
    @media (max-width: 500px) {
      .chatbox {
        width: 90%;
        right: 5%;
        bottom: 80px;
      }

      .chatbox-toggle {
        width: 45px;
        height: 45px;
        font-size: 20px;
        bottom: 20px;
        right: 20px;
      }
    }
    #messageInputArea {
  display: flex;
  gap: 10px; 
  padding: 0 10px;
}
.typing-indicator {
  width: 100px;
  height: 100px;
  font-size: 48px;
  display: flex;
  align-items: center;
  justify-content: center;
}

  </style>
</head>
<body>

<div class="chatbox hide" id="chatbox">
  <div class="chatbox-header">
    Let's chat? - We're online
  </div>
  <div class="chatbox-body">
    <div id="chatArea">
      <p>Hi 👋! Please fill out the form below to start chatting with the next available agent.</p>
      <input type="text" id="nameInput" placeholder="Name">
      <input type="email" id="emailInput" placeholder="Email">
      <select id="optionSelect">
        <option value="">Select Option</option>
        <option value="Support">Support</option>
      </select>
      <button id="startChatBtn">Start Chat</button>
    </div>

    <div id="chatMessages" style="display:none; max-height: 300px; overflow-y: auto; margin-top: 15px;"></div>
    <br>    <br>
    <div id="messageInputArea" style="display:none; margin-top: 10px;">
      <input type="text" id="messageInput" placeholder="Type your message..." style="width:80%; padding:8px;">
      <button id="sendBtn" style="width: 50px; height: 35px; padding: 0;">Send</button>
    </div>
  </div>
</div>

<div class="chatbox-toggle" id="chatboxToggle">
  💬
</div>

<script>
  const toggle = document.getElementById('chatboxToggle');
  const chatbox = document.getElementById('chatbox');
  const startChatBtn = document.getElementById('startChatBtn');
  const chatArea = document.getElementById('chatArea');
  const chatMessages = document.getElementById('chatMessages');
  const messageInputArea = document.getElementById('messageInputArea');
  const messageInput = document.getElementById('messageInput');
  const sendBtn = document.getElementById('sendBtn');

  let typingInterval; // Global so we can clear it

  toggle.addEventListener('click', () => {
    chatbox.classList.toggle('hide');
    toggle.innerHTML = chatbox.classList.contains('hide') ? '💬' : '✕';
  });
  

  startChatBtn.addEventListener('click', () => {
    const name = document.getElementById('nameInput').value.trim();
    const email = document.getElementById('emailInput').value.trim();
    const option = document.getElementById('optionSelect').value;

    if (name && email && option) {
      chatArea.style.display = 'none';
      chatMessages.style.display = 'block';
      messageInputArea.style.display = 'flex';
      botReply(`Hello ${name}! How can I assist you with ${option}?`);
    } else {
    Swal.fire({
      icon: 'warning',
      title: 'Oops...',
      text: 'Please fill all fields before starting the chat.',
    });
  }
});

  sendBtn.addEventListener('click', sendMessage);
  messageInput.addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
      sendMessage();
    }
  });

  function sendMessage() {
    const message = messageInput.value.trim();
    if (message) {
        addMessage('user', message);
        messageInput.value = '';

        // Show typing indicator with animated dots
        const typingDiv = document.createElement('div');
        typingDiv.classList.add('message', 'bot');
        const typingBubble = document.createElement('div');
        typingBubble.classList.add('bubble');
        typingBubble.style.fontSize = '30px'; // Set the font size of the dots here
        typingBubble.textContent = '.'; // Start with 1 dot
        typingDiv.appendChild(typingBubble);
        chatMessages.appendChild(typingDiv);
        chatMessages.scrollTop = chatMessages.scrollHeight;

        let dots = 1;
        typingInterval = setInterval(() => {
            dots = (dots % 3) + 1; // Cycle from 1 to 3
            typingBubble.textContent = '.'.repeat(dots);
        }, 500); // Change every 0.5 seconds

        // After 3 seconds, stop typing and send bot reply
        setTimeout(() => {
            clearInterval(typingInterval);
            chatMessages.removeChild(typingDiv);

            // Send message to server
            fetch('chatbot_api.php', {
                method: 'POST',
                body: new URLSearchParams({
                    'message': message
                })
            })
            .then(response => response.json())
            .then(data => {
                botReply(data.answer); // Show the answer from the server
            })
            .catch(error => {
                botReply('Sorry, something went wrong. Please try again later.');
            });
        }, 3000);
    }
}


  function addMessage(sender, text) {
    const messageDiv = document.createElement('div');
    messageDiv.classList.add('message', sender);
    const bubble = document.createElement('div');
    bubble.classList.add('bubble');
    bubble.textContent = text;
    messageDiv.appendChild(bubble);
    chatMessages.appendChild(messageDiv);
    chatMessages.scrollTop = chatMessages.scrollHeight;
  }

  function botReply(text) {
    addMessage('bot', text);
  }

  function saveChatHistory() {
    const chatBody = document.getElementById('chatMessages').innerHTML;
    localStorage.setItem('chatHistory', chatBody);
  }

  // Load chat history from localStorage when page loads
  window.onload = () => {
    const chatHistory = localStorage.getItem('chatHistory');
    if (chatHistory) {
      document.getElementById('chatMessages').innerHTML = chatHistory;
    }
  };
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>
</html>
