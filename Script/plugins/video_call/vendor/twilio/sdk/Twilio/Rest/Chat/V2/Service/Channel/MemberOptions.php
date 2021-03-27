<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Chat\V2\Service\Channel;

use Twilio\Options;
use Twilio\Values;

abstract class MemberOptions {
    /**
     * @param string $roleSid The SID of the Role to assign to the member
     * @param integer $lastConsumedMessageIndex The index of the last Message in
     *                                          the Channel the Member has read
     * @param \DateTime $lastConsumptionTimestamp The ISO 8601 based timestamp
     *                                            string representing the date-time
     *                                            of the last Message read event
     *                                            for the Member within the Channel
     * @param \DateTime $dateCreated The ISO 8601 date and time in GMT when the
     *                               resource was created
     * @param \DateTime $dateUpdated The ISO 8601 date and time in GMT when the
     *                               resource was updated
     * @param string $attributes A valid JSON string that contains
     *                           application-specific data
     * @return CreateMemberOptions Options builder
     */
    public static function create($roleSid = Values::NONE, $lastConsumedMessageIndex = Values::NONE, $lastConsumptionTimestamp = Values::NONE, $dateCreated = Values::NONE, $dateUpdated = Values::NONE, $attributes = Values::NONE) {
        return new CreateMemberOptions($roleSid, $lastConsumedMessageIndex, $lastConsumptionTimestamp, $dateCreated, $dateUpdated, $attributes);
    }

    /**
     * @param string $identity The `identity` value of the resources to read
     * @return ReadMemberOptions Options builder
     */
    public static function read($identity = Values::NONE) {
        return new ReadMemberOptions($identity);
    }

    /**
     * @param string $roleSid The SID of the Role to assign to the member
     * @param integer $lastConsumedMessageIndex The index of the last consumed
     *                                          Message for the Channel for the
     *                                          Member
     * @param \DateTime $lastConsumptionTimestamp The ISO 8601 based timestamp
     *                                            string representing the date-time
     *                                            of the last Message read event
     *                                            for the Member within the Channel
     * @param \DateTime $dateCreated The ISO 8601 date and time in GMT when the
     *                               resource was created
     * @param \DateTime $dateUpdated The ISO 8601 date and time in GMT when the
     *                               resource was updated
     * @param string $attributes A valid JSON string that contains
     *                           application-specific data
     * @return UpdateMemberOptions Options builder
     */
    public static function update($roleSid = Values::NONE, $lastConsumedMessageIndex = Values::NONE, $lastConsumptionTimestamp = Values::NONE, $dateCreated = Values::NONE, $dateUpdated = Values::NONE, $attributes = Values::NONE) {
        return new UpdateMemberOptions($roleSid, $lastConsumedMessageIndex, $lastConsumptionTimestamp, $dateCreated, $dateUpdated, $attributes);
    }
}

class CreateMemberOptions extends Options {
    /**
     * @param string $roleSid The SID of the Role to assign to the member
     * @param integer $lastConsumedMessageIndex The index of the last Message in
     *                                          the Channel the Member has read
     * @param \DateTime $lastConsumptionTimestamp The ISO 8601 based timestamp
     *                                            string representing the date-time
     *                                            of the last Message read event
     *                                            for the Member within the Channel
     * @param \DateTime $dateCreated The ISO 8601 date and time in GMT when the
     *                               resource was created
     * @param \DateTime $dateUpdated The ISO 8601 date and time in GMT when the
     *                               resource was updated
     * @param string $attributes A valid JSON string that contains
     *                           application-specific data
     */
    public function __construct($roleSid = Values::NONE, $lastConsumedMessageIndex = Values::NONE, $lastConsumptionTimestamp = Values::NONE, $dateCreated = Values::NONE, $dateUpdated = Values::NONE, $attributes = Values::NONE) {
        $this->options['roleSid'] = $roleSid;
        $this->options['lastConsumedMessageIndex'] = $lastConsumedMessageIndex;
        $this->options['lastConsumptionTimestamp'] = $lastConsumptionTimestamp;
        $this->options['dateCreated'] = $dateCreated;
        $this->options['dateUpdated'] = $dateUpdated;
        $this->options['attributes'] = $attributes;
    }

    /**
     * The SID of the [Role](https://www.twilio.com/docs/chat/rest/roles) to assign to the member. The default roles are those specified on the [Service](https://www.twilio.com/docs/chat/api/services).
     * 
     * @param string $roleSid The SID of the Role to assign to the member
     * @return $this Fluent Builder
     */
    public function setRoleSid($roleSid) {
        $this->options['roleSid'] = $roleSid;
        return $this;
    }

    /**
     * The index of the last [Message](https://www.twilio.com/docs/chat/rest/messages) in the [Channel](https://www.twilio.com/docs/chat/channels) that the Member has read. This parameter should only be used when recreating a Member from a backup/separate source.
     * 
     * @param integer $lastConsumedMessageIndex The index of the last Message in
     *                                          the Channel the Member has read
     * @return $this Fluent Builder
     */
    public function setLastConsumedMessageIndex($lastConsumedMessageIndex) {
        $this->options['lastConsumedMessageIndex'] = $lastConsumedMessageIndex;
        return $this;
    }

    /**
     * The ISO 8601 timestamp string that represents the date-time of the last [Message](https://www.twilio.com/docs/chat/rest/messages) read event for the Member within the [Channel](https://www.twilio.com/docs/chat/channels).
     * 
     * @param \DateTime $lastConsumptionTimestamp The ISO 8601 based timestamp
     *                                            string representing the date-time
     *                                            of the last Message read event
     *                                            for the Member within the Channel
     * @return $this Fluent Builder
     */
    public function setLastConsumptionTimestamp($lastConsumptionTimestamp) {
        $this->options['lastConsumptionTimestamp'] = $lastConsumptionTimestamp;
        return $this;
    }

    /**
     * The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was created. The default value is the current time set by the Chat service.  Note that this parameter should only be used when a Member is being recreated from a backup/separate source.
     * 
     * @param \DateTime $dateCreated The ISO 8601 date and time in GMT when the
     *                               resource was created
     * @return $this Fluent Builder
     */
    public function setDateCreated($dateCreated) {
        $this->options['dateCreated'] = $dateCreated;
        return $this;
    }

    /**
     * The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was last updated. The default value is `null`.  Note that this parameter should only be used when a Member is being recreated from a backup/separate source and where a Member was previously updated.
     * 
     * @param \DateTime $dateUpdated The ISO 8601 date and time in GMT when the
     *                               resource was updated
     * @return $this Fluent Builder
     */
    public function setDateUpdated($dateUpdated) {
        $this->options['dateUpdated'] = $dateUpdated;
        return $this;
    }

    /**
     * A valid JSON string that contains application-specific data.
     * 
     * @param string $attributes A valid JSON string that contains
     *                           application-specific data
     * @return $this Fluent Builder
     */
    public function setAttributes($attributes) {
        $this->options['attributes'] = $attributes;
        return $this;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Chat.V2.CreateMemberOptions ' . implode(' ', $options) . ']';
    }
}

class ReadMemberOptions extends Options {
    /**
     * @param string $identity The `identity` value of the resources to read
     */
    public function __construct($identity = Values::NONE) {
        $this->options['identity'] = $identity;
    }

    /**
     * The [User](https://www.twilio.com/docs/chat/rest/users)'s `identity` value of the resources to read. See [access tokens](https://www.twilio.com/docs/chat/create-tokens) for more details.
     * 
     * @param string $identity The `identity` value of the resources to read
     * @return $this Fluent Builder
     */
    public function setIdentity($identity) {
        $this->options['identity'] = $identity;
        return $this;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Chat.V2.ReadMemberOptions ' . implode(' ', $options) . ']';
    }
}

class UpdateMemberOptions extends Options {
    /**
     * @param string $roleSid The SID of the Role to assign to the member
     * @param integer $lastConsumedMessageIndex The index of the last consumed
     *                                          Message for the Channel for the
     *                                          Member
     * @param \DateTime $lastConsumptionTimestamp The ISO 8601 based timestamp
     *                                            string representing the date-time
     *                                            of the last Message read event
     *                                            for the Member within the Channel
     * @param \DateTime $dateCreated The ISO 8601 date and time in GMT when the
     *                               resource was created
     * @param \DateTime $dateUpdated The ISO 8601 date and time in GMT when the
     *                               resource was updated
     * @param string $attributes A valid JSON string that contains
     *                           application-specific data
     */
    public function __construct($roleSid = Values::NONE, $lastConsumedMessageIndex = Values::NONE, $lastConsumptionTimestamp = Values::NONE, $dateCreated = Values::NONE, $dateUpdated = Values::NONE, $attributes = Values::NONE) {
        $this->options['roleSid'] = $roleSid;
        $this->options['lastConsumedMessageIndex'] = $lastConsumedMessageIndex;
        $this->options['lastConsumptionTimestamp'] = $lastConsumptionTimestamp;
        $this->options['dateCreated'] = $dateCreated;
        $this->options['dateUpdated'] = $dateUpdated;
        $this->options['attributes'] = $attributes;
    }

    /**
     * The SID of the [Role](https://www.twilio.com/docs/chat/rest/roles) to assign to the member. The default roles are those specified on the [Service](https://www.twilio.com/docs/chat/api/services).
     * 
     * @param string $roleSid The SID of the Role to assign to the member
     * @return $this Fluent Builder
     */
    public function setRoleSid($roleSid) {
        $this->options['roleSid'] = $roleSid;
        return $this;
    }

    /**
     * The index of the last [Message](https://www.twilio.com/docs/chat/rest/messages) that the Member has read within the [Channel](https://www.twilio.com/docs/chat/channels).
     * 
     * @param integer $lastConsumedMessageIndex The index of the last consumed
     *                                          Message for the Channel for the
     *                                          Member
     * @return $this Fluent Builder
     */
    public function setLastConsumedMessageIndex($lastConsumedMessageIndex) {
        $this->options['lastConsumedMessageIndex'] = $lastConsumedMessageIndex;
        return $this;
    }

    /**
     * The ISO 8601 timestamp string that represents the date-time of the last [Message](https://www.twilio.com/docs/chat/rest/messages) read event for the Member within the [Channel](https://www.twilio.com/docs/chat/channels).
     * 
     * @param \DateTime $lastConsumptionTimestamp The ISO 8601 based timestamp
     *                                            string representing the date-time
     *                                            of the last Message read event
     *                                            for the Member within the Channel
     * @return $this Fluent Builder
     */
    public function setLastConsumptionTimestamp($lastConsumptionTimestamp) {
        $this->options['lastConsumptionTimestamp'] = $lastConsumptionTimestamp;
        return $this;
    }

    /**
     * The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was created. The default is the current time set by the Chat service.  Note that this parameter should only be used when a Member is being recreated from a backup/separate source.
     * 
     * @param \DateTime $dateCreated The ISO 8601 date and time in GMT when the
     *                               resource was created
     * @return $this Fluent Builder
     */
    public function setDateCreated($dateCreated) {
        $this->options['dateCreated'] = $dateCreated;
        return $this;
    }

    /**
     * The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was last updated. Note that this parameter should only be used when a Member is being recreated from a backup/separate source and where a Member was previously updated.
     * 
     * @param \DateTime $dateUpdated The ISO 8601 date and time in GMT when the
     *                               resource was updated
     * @return $this Fluent Builder
     */
    public function setDateUpdated($dateUpdated) {
        $this->options['dateUpdated'] = $dateUpdated;
        return $this;
    }

    /**
     * A valid JSON string that contains application-specific data.
     * 
     * @param string $attributes A valid JSON string that contains
     *                           application-specific data
     * @return $this Fluent Builder
     */
    public function setAttributes($attributes) {
        $this->options['attributes'] = $attributes;
        return $this;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Chat.V2.UpdateMemberOptions ' . implode(' ', $options) . ']';
    }
}