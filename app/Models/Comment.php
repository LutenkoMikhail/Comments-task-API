<?php


namespace App\Models;


use Jenssegers\Date\Date;

/**
 * Interface Comment
 * @package App\Models
 *
 * Public fields:
 *
 * @property Date $created_at
 * @property string $text
 * @property null|Comment $referenced_comment      Tip: if using Laravel, use a relationship
 * @property null|array<comment> $replies
 * @property User $user
 */
interface Comment extends Printable
{
    public function getCreatedDate();
    public function setCreatedDate(Date $created_at);


    public function getText();
    public function setText(string $text);

    public function getUser();
    public function setUser(User $user);

    public function getParent();
    public function setParent(int $parentId);

    public function getReplies();
    public function setReplies(int $parentId);

}
