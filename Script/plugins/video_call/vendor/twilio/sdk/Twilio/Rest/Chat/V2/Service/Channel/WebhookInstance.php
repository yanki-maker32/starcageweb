<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Chat\V2\Service\Channel;

use Twilio\Deserialize;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;

/**
 * @property string sid
 * @property string accountSid
 * @property string serviceSid
 * @property string channelSid
 * @property string type
 * @property string url
 * @property array configuration
 * @property \DateTime dateCreated
 * @property \DateTime dateUpdated
 */
class WebhookInstance extends InstanceResource {
    /**
     * Initialize the WebhookInstance
     * 
     * @param \Twilio\Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $serviceSid The SID of the Service that the resource is
     *                           associated with
     * @param string $channelSid The SID of the Channel the ChannelWebhook resource
     *                           belongs to
     * @param string $sid The unique string that identifies the resource
     * @return \Twilio\Rest\Chat\V2\Service\Channel\WebhookInstance 
     */
    public function __construct(Version $version, array $payload, $serviceSid, $channelSid, $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = array(
            'sid' => Values::array_get($payload, 'sid'),
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'serviceSid' => Values::array_get($payload, 'service_sid'),
            'channelSid' => Values::array_get($payload, 'channel_sid'),
            'type' => Values::array_get($payload, 'type'),
            'url' => Values::array_get($payload, 'url'),
            'configuration' => Values::array_get($payload, 'configuration'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
        );

        $this->solution = array(
            'serviceSid' => $serviceSid,
            'channelSid' => $channelSid,
            'sid' => $sid ?: $this->properties['sid'],
        );
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     * 
     * @return \Twilio\Rest\Chat\V2\Service\Channel\WebhookContext Context for this
     *                                                             WebhookInstance
     */
    protected function proxy() {
        if (!$this->context) {
            $this->context = new WebhookContext(
                $this->version,
                $this->solution['serviceSid'],
                $this->solution['channelSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Fetch a WebhookInstance
     * 
     * @return WebhookInstance Fetched WebhookInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() {
        return $this->proxy()->fetch();
    }

    /**
     * Update the WebhookInstance
     * 
     * @param array|Options $options Optional Arguments
     * @return WebhookInstance Updated WebhookInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update($options = array()) {
        return $this->proxy()->update($options);
    }

    /**
     * Deletes the WebhookInstance
     * 
     * @return boolean True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete() {
        return $this->proxy()->delete();
    }

    /**
     * Magic getter to access properties
     * 
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get($name) {
        if (array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (property_exists($this, '_' . $name)) {
            $method = 'get' . ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $context = array();
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Chat.V2.WebhookInstance ' . implode(' ', $context) . ']';
    }
}