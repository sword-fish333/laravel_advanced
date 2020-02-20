<?php
/**
 * Created by PhpStorm.
 * User: ghiurca
 * Date: 2/20/20
 * Time: 12:32 PM
 */

namespace App\Repositories\Comment;


use App\Comment;
use App\Repositories\DbRepository;

class DbCommentRepository extends DbRepository implements CommentRepository
{
    private $comment;
    function __construct(Comment $comment)
    {
        $this->comment=$comment;
    }
}