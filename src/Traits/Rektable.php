<?php

namespace Tysweezy\Rekt\Traits;

use Tysweezy\Rekt\Models\UserStrike;
use Illuminate\Database\Eloquent\Builder;

trait Rektable {

    /**
     * Add a strike to user
     *
     * @param array $data
     * @return Builder
     */
    public function addStrike(array $data)
    {
        if (!isset($this)) {
            // throw a custom exception
        } 

        $strike = UserStrike::create([
            'user_id' => $this->id,
            'reason'  => $data['reason']
        ]);

        return $strike;
    }
    
    /**
     * Get strike count for user
     *
     * @return Builder
     */
    public function strikeCount() 
    {
        return count(
            UserStrike::where('user_id', $this->id)->get()
        );
    }

    /**
     * Add user to banned table if user reaches a strike limit 
     * or at discretion of a site owner/moderator
     *
     * @param integer $userId
     * @param string $reason
     * @return Builder
     */
    public function banUser(int $userId, string $reason)
    {
        //    
    }

    /**
     * Add user to suspended table if user reaches a strike limit
     * or at discretion of a site owner/moderator.
     *
     * @param integer $userId
     * @param string $reason
     * @return Builder
     */
    public function suspendUser(int $userId, string $reason)
    {
        //    
    }

    /**
     * Notify user that the are banned, recieve strike or suspended
     *
     * @param integer $userId
     * @param string $type
     * @param integer $typeId
     * @return Builder
     */
    public function notifyUser(int $userId, string $type, int $typeId)
    {
        // 
    }

    /**
     * Remove strike from user
     *
     * @param integer $userId
     * @param integer $strikeId
     * @return void
     */
    public function removeStrike(int $userId, int $strikeId)
    {
        // 
    }

    /**
     * Lift ban from user.
     *
     * @param integer $userId
     * @param integer $bannedId
     * @return Builder
     */
    public function liftBanned(int $userId, int $bannedId)
    {
        // 
    }

    /**
     * Lift suspension from user.
     *
     * @param integer $userId
     * @param integer $suspendedId
     * @return Builder
     */
    public function liftSuspension(int $userId, int $suspendedId)
    {
        //
    }   
}