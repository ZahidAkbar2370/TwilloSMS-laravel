<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Numbers
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Numbers\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;


/**
 * @property string|null $requestId
 * @property string|null $url
 * @property array[]|null $results
 * @property string|null $friendlyName
 * @property string|null $status
 * @property \DateTime|null $dateCreated
 * @property \DateTime|null $dateCompleted
 */
class BulkEligibilityInstance extends InstanceResource
{
    /**
     * Initialize the BulkEligibilityInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $requestId The SID of the bulk eligibility check that you want to know about.
     */
    public function __construct(Version $version, array $payload, string $requestId = null)
    {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'requestId' => Values::array_get($payload, 'request_id'),
            'url' => Values::array_get($payload, 'url'),
            'results' => Values::array_get($payload, 'results'),
            'friendlyName' => Values::array_get($payload, 'friendly_name'),
            'status' => Values::array_get($payload, 'status'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateCompleted' => Deserialize::dateTime(Values::array_get($payload, 'date_completed')),
        ];

        $this->solution = ['requestId' => $requestId ?: $this->properties['requestId'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return BulkEligibilityContext Context for this BulkEligibilityInstance
     */
    protected function proxy(): BulkEligibilityContext
    {
        if (!$this->context) {
            $this->context = new BulkEligibilityContext(
                $this->version,
                $this->solution['requestId']
            );
        }

        return $this->context;
    }

    /**
     * Fetch the BulkEligibilityInstance
     *
     * @return BulkEligibilityInstance Fetched BulkEligibilityInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): BulkEligibilityInstance
    {

        return $this->proxy()->fetch();
    }

    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get(string $name)
    {
        if (\array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Numbers.V1.BulkEligibilityInstance ' . \implode(' ', $context) . ']';
    }
}

