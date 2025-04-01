// DOM Elements
const chatWidget = document.querySelector('.chat-widget');
const chatToggle = document.querySelector('.chat-toggle');
const chatContainer = document.querySelector('.chat-container');
const chatMessages = document.querySelector('.chat-messages');
const chatInput = document.querySelector('.chat-input');
const sendMessage = document.querySelector('.send-message');
const closeChat = document.querySelector('.close-chat');

// Advice responses for different situations
const ADVICE_RESPONSES = {
    // For struggles and challenges
    struggles: {
        keywords: ['cant', 'difficult', 'hard', 'struggling', 'tired', 'exhausted', 'overwhelmed', 'stress'],
        responses: [
            "I can hear that you're going through a tough time. Would you like to tell me more about what's making you feel overwhelmed? Sometimes talking it through can help us see things more clearly. 💭",
            "That sounds really challenging. What do you think is the hardest part about this situation? Let's break it down together and see if we can find a way forward. 🤝",
            "It's completely okay to feel this way. Can you tell me what kind of support would be most helpful right now? Whether you want to talk more or just need someone to listen, I'm here. 🌟",
            "I'm hearing how difficult this is for you. What has helped you cope with similar situations in the past? Sometimes our past experiences can guide us through current challenges. 💪",
            "Thank you for sharing this with me. Would you like to explore some ways to make things feel more manageable? We can take it one small step at a time. 🌈"
        ]
    },
    
    // For doubt and uncertainty
    doubt: {
        keywords: ['confused', 'unsure', 'dont know', "don't know", 'lost', 'maybe', 'perhaps', 'doubt'],
        responses: [
            "It's natural to feel uncertain sometimes. What's making you feel unsure right now? Let's talk it through together - sometimes just putting our thoughts into words can help bring clarity. 💭",
            "I hear the uncertainty in your words. What options are you considering? Maybe we can explore them together and see which one feels right for you. ✨",
            "Being unsure can be really uncomfortable. What's your gut telling you about this situation? Sometimes our intuition knows more than we think. 🌟",
            "Thank you for sharing your doubts with me. What would help you feel more confident about this decision? Let's explore what you need to feel more certain. 💫",
            "It's okay to take your time with this. What's the main concern that's holding you back? Understanding our hesitations can often help us move forward. 🤔"
        ]
    },
    
    // For positive moments
    positive: {
        keywords: ['happy', 'good', 'better', 'improving', 'grateful', 'thankful', 'blessed', 'peace'],
        responses: [
            "That's wonderful to hear! What made today special for you? I'd love to hear more about what's bringing this positive energy into your life! 🌟",
            "Your joy is contagious! Could you share more about what's making you feel this way? Sometimes reflecting on our happy moments helps us create more of them! ✨",
            "I'm so glad things are going well! What do you think contributed to this positive change? Your insights might help you maintain this good feeling! 🎉",
            "It's beautiful to hear you're in such a good place! Would you like to share what you're most grateful for right now? Celebrating these moments can make them even more special! 💫",
            "Your positive energy is brightening my day too! What's the best part about how you're feeling right now? Let's savor this moment together! 🌈"
        ]
    },
    
    // For relationship matters
    relationships: {
        keywords: ['friend', 'family', 'partner', 'relationship', 'people', 'someone', 'they', 'them'],
        responses: [
            "Relationships can be complex, can't they? Would you like to tell me more about what's happening? Sometimes talking it through can help us see things from a new perspective. 💝",
            "I can hear this relationship matters a lot to you. What's the main thing you'd like to see change or improve? Let's think about how we might approach that. 🤗",
            "Thank you for sharing this with me. How long has this situation been on your mind? Sometimes understanding the pattern can help us find better ways to connect. 💭",
            "Relationships take work, don't they? What have you tried so far to address this? Maybe we can brainstorm some new approaches together. 🌸",
            "It sounds like this is really important to you. How would you like things to be different? Understanding our hopes can help guide our actions. ❤️"
        ]
    },
    
    // For spiritual concerns
    spiritual: {
        keywords: ['god', 'faith', 'believe', 'prayer', 'spirit', 'church', 'bible', 'worship'],
        responses: [
            "Your spiritual journey is so personal and meaningful. Would you like to share what's on your heart right now? I'm here to listen and support you. 🕊️",
            "Faith can bring up so many deep questions. What's prompting these thoughts today? Sometimes exploring our spiritual questions can lead to beautiful discoveries. ✨",
            "Thank you for sharing something so personal. How has your faith been helping you navigate this? Or what questions are you wrestling with? 🌟",
            "It's beautiful to see you engaging with your spiritual side. What does this mean to you personally? Everyone's journey is unique and valuable. 💫",
            "These are such meaningful reflections. How has your spiritual perspective been evolving lately? I'd love to hear more about your journey. 🙏"
        ]
    },
    
    // Default advice for general thoughts
    default: [
        "I'm here to listen and support you. What's on your mind today? Sometimes just sharing our thoughts can help us see things more clearly. 💭",
        "Thank you for reaching out. Would you like to tell me more about what brought you here today? I'm here to listen without judgment. 🤗",
        "I'm interested in hearing more about what you're experiencing. What would be most helpful to talk about right now? 🌟",
        "Your thoughts and feelings matter. What's the main thing you'd like to explore or discuss today? Let's take it one step at a time. ✨",
        "I'm glad you're here. How are you really doing today? Sometimes it helps to start with where we are right now. 💫"
    ]
};

// Chat Functions
function toggleChat() {
    chatContainer.classList.toggle('active');
    if (chatContainer.classList.contains('active')) {
        chatInput.focus();
        // Show welcome message if this is the first time
        if (!chatMessages.hasChildNodes()) {
            createMessage("Welcome. Share your thoughts, and I'll offer some guidance.", 'guide');
        }
    }
}

function handleCloseChat() {
    chatContainer.classList.remove('active');
}

function createMessage(text, type = 'user') {
    const messageDiv = document.createElement('div');
    messageDiv.className = `message ${type}`;
    messageDiv.textContent = text;
    chatMessages.appendChild(messageDiv);
    chatMessages.scrollTop = chatMessages.scrollHeight;
}

function findAdviceCategory(text) {
    text = text.toLowerCase();
    
    for (const [category, data] of Object.entries(ADVICE_RESPONSES)) {
        if (category !== 'default' && data.keywords && 
            data.keywords.some(keyword => text.includes(keyword))) {
            return category;
        }
    }
    
    return 'default';
}

function getAdvice(text) {
    const category = findAdviceCategory(text);
    
    const responses = category === 'default' 
        ? ADVICE_RESPONSES.default 
        : ADVICE_RESPONSES[category].responses;
    
    return responses[Math.floor(Math.random() * responses.length)];
}

function handleSendMessage() {
    const message = chatInput.value.trim();
    if (!message) return;

    // Clear input
    chatInput.value = '';

    // Add user message
    createMessage(message, 'user');

    // Add advice after a short delay
    setTimeout(() => {
        const advice = getAdvice(message);
        createMessage(advice, 'guide');
    }, 800);
}

// Event Listeners
document.addEventListener('DOMContentLoaded', () => {
    // Setup chat functionality
    chatToggle?.addEventListener('click', toggleChat);
    closeChat?.addEventListener('click', handleCloseChat);
    
    sendMessage?.addEventListener('click', handleSendMessage);
    chatInput?.addEventListener('keypress', (e) => {
        if (e.key === 'Enter' && !e.shiftKey) {
            e.preventDefault();
            handleSendMessage();
        }
    });

    // Close chat when clicking outside
    document.addEventListener('click', (event) => {
        if (chatWidget && !chatWidget.contains(event.target)) {
            chatContainer?.classList.remove('active');
        }
    });
});

// Chat toggle functionality
document.addEventListener('DOMContentLoaded', function() {
    const chatToggle = document.querySelector('.chat-toggle');
    const chatContainer = document.querySelector('.chat-container');
    const closeChat = document.querySelector('.close-chat');
    
    if (chatToggle && chatContainer) {
        // Initialize chat container style
        chatContainer.style.visibility = 'hidden';
        chatContainer.style.opacity = '0';
        
        chatToggle.addEventListener('click', function() {
            if (chatContainer.style.visibility === 'visible') {
                chatContainer.style.opacity = '0';
                chatContainer.style.visibility = 'hidden';
                chatContainer.style.transform = 'translateY(20px) scale(0.9)';
            } else {
                chatContainer.style.opacity = '1';
                chatContainer.style.visibility = 'visible';
                chatContainer.style.transform = 'translateY(0) scale(1)';
            }
        });
    }
    
    if (closeChat && chatContainer) {
        closeChat.addEventListener('click', function() {
            chatContainer.style.opacity = '0';
            chatContainer.style.visibility = 'hidden';
            chatContainer.style.transform = 'translateY(20px) scale(0.9)';
        });
    }
}); 