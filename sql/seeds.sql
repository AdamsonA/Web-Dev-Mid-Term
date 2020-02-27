INSERT INTO users 
(username, password, email, first_name, last_name)
VALUES
('admin', '12345', 'admin@admin.com', 'Admin', 'Admin');


INSERT INTO news 
(user_id, image_url, message)
VALUES 
(1, 'https://images.pexels.com/photos/50582/selfie-monkey-self-portrait-macaca-nigra-50582.jpeg?auto=compress&cs=tinysrgb&h=650&w=940', 'She always speaks to him in a loud voice.'),
(1, 'https://images.pexels.com/photos/37547/suit-business-man-business-man-37547.jpeg?auto=compress&cs=tinysrgb&h=650&w=940', 'We need to rent a room for our party.'),
(1, 'https://images.pexels.com/photos/1183434/pexels-photo-1183434.jpeg?auto=compress&cs=tinysrgb&h=650&w=940', 'If I don’t like something, I’ll stay away from it.');