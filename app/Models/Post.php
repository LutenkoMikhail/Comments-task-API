<?php


namespace App\Models;


use Jenssegers\Date\Date;


/**
 * Interface Post
 * @package App\Models
 *
 * Public fields:
 *
 * @property Date $created_at
 * @property string $text
 * @property int $views
 * @property null|array<Comment> $comments     Tip: if using Laravel, use a relationship
 */
interface Post extends Printable
{
    public function getCreatedDate();
    public function setCreatedDate(Date $created_at);

    public function getText();
    public function setText(string $text);

    public function getViews();
    public function setViews(int $views);

    public function getComment();
    public function setComment(array $Comment);

}
