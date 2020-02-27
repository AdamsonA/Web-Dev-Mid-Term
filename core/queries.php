<?php

function allNewsItem() {
  return "
  SELECT 
    news.id, 
    news.image_url, 
    users.username, 
    news.message,
    news.title,
    news.created_at
  FROM 
    news
    JOIN users ON users.id = news.user_id
  ";
}

function createUser($username, $password) {
  return "
  INSERT INTO users (
    email,
    first_name,
    last_name,
    password,
    username
  )
  VALUES
  (
      '$username',
      'FirstName',
      'LastName',
      '$password',
      '$username'
  );
  ";
}

function findUser($username) {
  return "
  SELECT 
      u.id, 
      u.first_name, 
      u.last_name, 
      u.username
  FROM users u
  WHERE u.username = '$username'
  LIMIT 1
  ";
}

function findUserWithPassword($username) {
  return "
  SELECT 
    u.id, 
    u.first_name, 
    u.last_name, 
    u.username,
    u.password
  FROM users u
  WHERE u.username = '$username'
  ";
}

function createNewNews($username, $message, $title, $imageUrl) {
  return "
  INSERT INTO news (
      image_url,
      message,
      title,
      user_id
    )
    VALUES
    (
      '$imageUrl',
      '$message',
      '$title',
      (SELECT id FROM users WHERE username = '$username' LIMIT 1)
    );
  ";
}