<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\FlexApi\V1;

use Twilio\InstanceContext;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;

class ConfigurationContext extends InstanceContext {
    /**
     * Initialize the ConfigurationContext
     * 
     * @param \Twilio\Version $version Version that contains the resource
     * @return \Twilio\Rest\FlexApi\V1\ConfigurationContext 
     */
    public function __construct(Version $version) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array();

        $this->uri = '/Configuration';
    }

    /**
     * Fetch a ConfigurationInstance
     * 
     * @param array|Options $options Optional Arguments
     * @return ConfigurationInstance Fetched ConfigurationInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch($options = array()) {
        $options = new Values($options);

        $params = Values::of(array('UiVersion' => $options['uiVersion'], ));

        $payload = $this->version->fetch(
            'GET',
            $this->uri,
            $params
        );

        return new ConfigurationInstance($this->version, $payload);
    }

    /**
     * Create a new ConfigurationInstance
     * 
     * @return ConfigurationInstance Newly created ConfigurationInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create() {
        $data = Values::of(array());

        $payload = $this->version->create(
            'POST',
            $this->uri,
            array(),
            $data
        );

        return new ConfigurationInstance($this->version, $payload);
    }

    /**
     * Update the ConfigurationInstance
     * 
     * @return ConfigurationInstance Updated ConfigurationInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update() {
        $data = Values::of(array());

        $payload = $this->version->update(
            'POST',
            $this->uri,
            array(),
            $data
        );

        return new ConfigurationInstance($this->version, $payload);
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
        return '[Twilio.FlexApi.V1.ConfigurationContext ' . implode(' ', $context) . ']';
    }
}