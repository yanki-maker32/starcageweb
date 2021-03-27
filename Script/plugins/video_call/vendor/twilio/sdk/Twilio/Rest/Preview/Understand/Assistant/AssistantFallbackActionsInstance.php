<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Preview\Understand\Assistant;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 * 
 * @property string accountSid
 * @property string assistantSid
 * @property string url
 * @property array data
 */
class AssistantFallbackActionsInstance extends InstanceResource {
    /**
     * Initialize the AssistantFallbackActionsInstance
     * 
     * @param \Twilio\Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $assistantSid The assistant_sid
     * @return \Twilio\Rest\Preview\Understand\Assistant\AssistantFallbackActionsInstance 
     */
    public function __construct(Version $version, array $payload, $assistantSid) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = array(
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'assistantSid' => Values::array_get($payload, 'assistant_sid'),
            'url' => Values::array_get($payload, 'url'),
            'data' => Values::array_get($payload, 'data'),
        );

        $this->solution = array('assistantSid' => $assistantSid, );
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     * 
     * @return \Twilio\Rest\Preview\Understand\Assistant\AssistantFallbackActionsContext Context for this
     *                                                                                   AssistantFallbackActionsInstance
     */
    protected function proxy() {
        if (!$this->context) {
            $this->context = new AssistantFallbackActionsContext(
                $this->version,
                $this->solution['assistantSid']
            );
        }

        return $this->context;
    }

    /**
     * Fetch a AssistantFallbackActionsInstance
     * 
     * @return AssistantFallbackActionsInstance Fetched
     *                                          AssistantFallbackActionsInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() {
        return $this->proxy()->fetch();
    }

    /**
     * Update the AssistantFallbackActionsInstance
     * 
     * @param array|Options $options Optional Arguments
     * @return AssistantFallbackActionsInstance Updated
     *                                          AssistantFallbackActionsInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update($options = array()) {
        return $this->proxy()->update($options);
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
        return '[Twilio.Preview.Understand.AssistantFallbackActionsInstance ' . implode(' ', $context) . ']';
    }
}