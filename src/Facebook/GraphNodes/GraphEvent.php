<?php
/**
 * Copyright 2014 Facebook, Inc.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Facebook.
 *
 * As with any software that integrates with the Facebook platform, your use
 * of this software is subject to the Facebook Developer Principles and
 * Policies [http://developers.facebook.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
 */
namespace Facebook\GraphNodes;

/**
 * Class GraphEvent
 *
 * @package Facebook
 */
class GraphEvent extends GraphObject
{
    /**
     * @var array Maps object key names to Graph object types.
     */
    protected static $graphObjectMap = [
        'cover' => '\Facebook\GraphNodes\GraphCoverPhoto',
        'place' => '\Facebook\GraphNodes\GraphPage',
        'picture' => '\Facebook\GraphNodes\GraphPicture',
        // @todo parent_group must be cast to GraphGroup once supported
        // 'parent_group' => '\Facebook\GraphNodes\GraphGroup',
    ];

    /**
     * Returns the `id` (The event ID) as string if present.
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->getProperty('id');
    }

    /**
     * Returns the `cover` (Cover picture) as GraphCoverPhoto if present.
     *
     * @return GraphCoverPhoto|null
     */
    public function getCover()
    {
        return $this->getProperty('cover');
    }

    /**
     * Returns the `description` (Long-form description) as string if present.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->getProperty('description');
    }

    /**
     * Returns the `end_time` (End time, if one has been set) as DateTime if present.
     *
     * @return DateTime|null
     */
    public function getEndTime()
    {
        return $this->getProperty('end_time');
    }

    /**
     * Returns the `is_date_only` (Whether the event only has a date specified, but no time) as bool if present.
     *
     * @return bool|null
     */
    public function getIsDateOnly()
    {
        return $this->getProperty('is_date_only');
    }

    /**
     * Returns the `name` (Event name) as string if present.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * Returns the `owner` (The profile that created the event) as GraphObject if present.
     *
     * @return GraphObject|null
     */
    public function getOwner()
    {
        return $this->getProperty('owner');
    }

    /**
     * Returns the `parent_group` (The group the event belongs to) as GraphObject if present.
     *
     * @return GraphObject|null
     */
    public function getParentGroup()
    {
        return $this->getProperty('parent_group');
    }

    /**
     * Returns the `place` (Event Place information) as GraphPage if present.
     *
     * @return GraphPage|null
     */
    public function getPlace()
    {
        return $this->getProperty('place');
    }

    /**
     * Returns the `privacy` (Who can see the event) as string if present.
     *
     * @return string|null
     */
    public function getPrivacy()
    {
        return $this->getProperty('privacy');
    }

    /**
     * Returns the `start_time` (Start time) as DateTime if present.
     *
     * @return DateTime|null
     */
    public function getStartTime()
    {
        return $this->getProperty('start_time');
    }

    /**
     * Returns the `ticket_uri` (The link users can visit to buy a ticket to this event) as string if present.
     *
     * @return string|null
     */
    public function getTicketUri()
    {
        return $this->getProperty('ticket_uri');
    }

    /**
     * Returns the `timezone` (Timezone) as string if present.
     *
     * @return string|null
     */
    public function getTimezone()
    {
        return $this->getProperty('timezone');
    }

    /**
     * Returns the `updated_time` (Last update time) as DateTime if present.
     *
     * @return DateTime|null
     */
    public function getUpdatedTime()
    {
        return $this->getProperty('updated_time');
    }

    /**
     * Returns the `picture` (Event picture) as GraphPicture if present.
     *
     * @return GraphPicture|null
     */
    public function getPicture()
    {
        return $this->getProperty('picture');
    }

    /**
     * Returns the `attending_count` (Number of people attending the event) as int if present.
     *
     * @return int|null
     */
    public function getAttendingCount()
    {
        return $this->getProperty('attending_count');
    }

    /**
     * Returns the `declined_count` (Number of people who declined the event) as int if present.
     *
     * @return int|null
     */
    public function getDeclinedCount()
    {
        return $this->getProperty('declined_count');
    }

    /**
     * Returns the `maybe_count` (Number of people who maybe going to the event) as int if present.
     *
     * @return int|null
     */
    public function getMaybeCount()
    {
        return $this->getProperty('maybe_count');
    }

    /**
     * Returns the `noreply_count` (Number of people who did not reply to the event) as int if present.
     *
     * @return int|null
     */
    public function getNoreplyCount()
    {
        return $this->getProperty('noreply_count');
    }

    /**
     * Returns the `invited_count` (Number of people invited to the event) as int if present.
     *
     * @return int|null
     */
    public function getInvitedCount()
    {
        return $this->getProperty('invited_count');
    }
}