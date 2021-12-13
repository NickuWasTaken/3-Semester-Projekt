<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

include 'DBconnect.php';

function getNews($id) {

    global $conn;
  
    $sql = "SELECT * FROM news WHERE id = $id";
    $result = $conn->query($sql);
  
    return $result;
  }

  function getAllNews() {

    global $conn;
  
    $sql = "SELECT news.Title, news.NewsID, pictures.imgURL
    FROM `news`, `pictures`,`news_pictures` 
    WHERE news_pictures.NewsID = news.NewsID 
    AND news_pictures.PictureID = pictures.PictureID";

    $result = $conn->query($sql);
  
    return $result;
  }

  function getAllEvents() {

    global $conn;
  
    $sql = "SELECT events.Title, pictures.imgURL
    FROM `events`, `pictures`,`events_pictures` 
    WHERE events_pictures.EventID = events.EventID 
    AND events_pictures.PictureID = pictures.PictureID";
    
    $result = $conn->query($sql);
  
    return $result;
  } 

  function getAllWalls() {

    global $conn;
  
    $sql = "SELECT * FROM `wall`";
    
    $result = $conn->query($sql);
  
    return $result;
  }

  function getAllDifficulties() {

    global $conn;
  
    $sql = "SELECT * FROM `difficulty`";
    
    $result = $conn->query($sql);
  
    return $result;
  }

  function getWallName($wall) {

    global $conn;
  
    $sql = "SELECT * FROM `wall` 
    WHERE WallID = $wall";
    
    $result = $conn->query($sql);
  
    return $result;
  }

  function getWallVideos($wall) {

    global $conn;
  
    $sql = "SELECT * FROM `video` 
    WHERE WallID = $wall";
    
    $result = $conn->query($sql);
  
    return $result;
  }

  function getVideo($id) {

    global $conn;
  
    $sql = "SELECT * FROM `video`, `wall`, `routes` 
    WHERE LinkID = $id
    AND wall.WallID = video.WallID
    AND routes.routeID = video.routeID";
    
    $result = $conn->query($sql);
  
    return $result;
  }

  function likeVideo($id){

    global $conn;
  
    $sql = "UPDATE `video` 
    SET `Likes` = `Likes`+1 
    WHERE `LinkID` = $id";
    
    $result = $conn->query($sql);
  
    return $result;
  }

  function dislikeVideo($id){

    global $conn;
  
    $sql = "UPDATE `video` 
    SET `Likes` = `Likes`-1 
    WHERE `LinkID` = $id";
    
    $result = $conn->query($sql);
  
    return $result;
  }


?>