<?php
// file: model/CommentMapper.php

require_once(__DIR__."/../core/PDOConnection.php");

require_once(__DIR__."/../model/Comment.php");

/**
 * Class CommentMapper
 *
 * Database interface for Comment entities
 * 
 *Tareas :
 *  -Nada.
 *Tareas realizadas:
 * - Correcion en llamadas a sentencias SQL(content, author, post,comments).
 */
class CommentMapper {
 
  /**
   * Reference to the PDO connection
   * @var PDO
   */
  private $db;
  
  public function __construct() {
    $this->db = PDOConnection::getInstance();
  }
  
  /**
   * Saves a comment
   * 
   * @param Comment $comment The comment to save
   * @throws PDOException if a database error occurs
   * @return void
   */
  public function save(Comment $comment) {
    $stmt = $this->db->prepare("INSERT INTO comments(content, author, post) values (?,?,?)");
    $stmt->execute(array($comment->getContent(), $comment->getAuthor()->getUsername(), $comment->getPost()->getId()));    
  }
}
