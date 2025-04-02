-- Create the database if it doesn't exist
CREATE DATABASE IF NOT EXISTS freedom_wall_db;

-- Use the database
USE freedom_wall_db;

-- Create posts table
CREATE TABLE IF NOT EXISTS posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    author VARCHAR(100) DEFAULT 'Anonymous',
    message TEXT NOT NULL,
    category VARCHAR(50) NOT NULL,
    created_at DATETIME NOT NULL,
    likes INT DEFAULT 0
);

-- Add some sample data
INSERT INTO posts (author, message, category, created_at, likes) VALUES
('Maria', 'Always remember to take a moment each day to appreciate the small things. It\'s the little moments that make life beautiful.', 'inspiration', NOW() - INTERVAL 2 DAY, 15),
('John', 'Don\'t give up on your dreams just because of a few setbacks. Every challenge is an opportunity to grow stronger.', 'motivation', NOW() - INTERVAL 1 DAY, 23),
('Anonymous', 'I\'ve been struggling with anxiety lately. Does anyone have tips on how to manage stress during difficult times?', 'challenge', NOW() - INTERVAL 12 HOUR, 7),
('Sarah', 'If you\'re feeling overwhelmed, try breaking your tasks into smaller, manageable steps. It\'s okay to progress slowly as long as you\'re moving forward.', 'advice', NOW() - INTERVAL 8 HOUR, 19),
('Anonymous', 'How do you find balance between school/work and personal time?', 'question', NOW() - INTERVAL 4 HOUR, 3),
('Michael', 'Remember that it\'s okay to not be okay sometimes. Healing isn\'t linear, and every step forward, no matter how small, is still progress.', 'motivation', NOW() - INTERVAL 2 HOUR, 12);

-- Create comments table for future expansion
CREATE TABLE IF NOT EXISTS comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    post_id INT NOT NULL,
    author VARCHAR(100) DEFAULT 'Anonymous',
    comment TEXT NOT NULL,
    created_at DATETIME NOT NULL,
    FOREIGN KEY (post_id) REFERENCES posts(id) ON DELETE CASCADE
); 