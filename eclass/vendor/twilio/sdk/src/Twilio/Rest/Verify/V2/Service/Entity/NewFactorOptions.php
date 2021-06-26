<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Verify\V2\Service\Entity;

use Twilio\Options;
use Twilio\Values;

/**
 * PLEASE NOTE that this class contains beta products that are subject to change. Use them with caution.
 */
abstract class NewFactorOptions {
    /**
     * @param string $bindingAlg The algorithm used when `factor_type` is `push`
     * @param string $bindingPublicKey The public key encoded in Base64
     * @param string $configAppId The ID that uniquely identifies your app in the
     *                            Google or Apple store
     * @param string $configNotificationPlatform The transport technology used to
     *                                           generate the Notification Token
     * @param string $configNotificationToken For APN, the device token. For FCM
     *                                        the registration token
     * @param string $configSdkVersion The Verify Push SDK version used to
     *                                 configure the factor
     * @param string $bindingSecret The shared secret in Base32
     * @param int $configTimeStep How often, in seconds, are TOTP codes generated
     * @param int $configSkew The number of past and future time-steps valid at a
     *                        given time
     * @param int $configCodeLength Number of digits for generated TOTP codes
     * @param string $configAlg The algorithm used to derive the TOTP codes
     * @return CreateNewFactorOptions Options builder
     */
    public static function create(string $bindingAlg = Values::NONE, string $bindingPublicKey = Values::NONE, string $configAppId = Values::NONE, string $configNotificationPlatform = Values::NONE, string $configNotificationToken = Values::NONE, string $configSdkVersion = Values::NONE, string $bindingSecret = Values::NONE, int $configTimeStep = Values::NONE, int $configSkew = Values::NONE, int $configCodeLength = Values::NONE, string $configAlg = Values::NONE): CreateNewFactorOptions {
        return new CreateNewFactorOptions($bindingAlg, $bindingPublicKey, $configAppId, $configNotificationPlatform, $configNotificationToken, $configSdkVersion, $bindingSecret, $configTimeStep, $configSkew, $configCodeLength, $configAlg);
    }
}

class CreateNewFactorOptions extends Options {
    /**
     * @param string $bindingAlg The algorithm used when `factor_type` is `push`
     * @param string $bindingPublicKey The public key encoded in Base64
     * @param string $configAppId The ID that uniquely identifies your app in the
     *                            Google or Apple store
     * @param string $configNotificationPlatform The transport technology used to
     *                                           generate the Notification Token
     * @param string $configNotificationToken For APN, the device token. For FCM
     *                                        the registration token
     * @param string $configSdkVersion The Verify Push SDK version used to
     *                                 configure the factor
     * @param string $bindingSecret The shared secret in Base32
     * @param int $configTimeStep How often, in seconds, are TOTP codes generated
     * @param int $configSkew The number of past and future time-steps valid at a
     *                        given time
     * @param int $configCodeLength Number of digits for generated TOTP codes
     * @param string $configAlg The algorithm used to derive the TOTP codes
     */
    public function __construct(string $bindingAlg = Values::NONE, string $bindingPublicKey = Values::NONE, string $configAppId = Values::NONE, string $configNotificationPlatform = Values::NONE, string $configNotificationToken = Values::NONE, string $configSdkVersion = Values::NONE, string $bindingSecret = Values::NONE, int $configTimeStep = Values::NONE, int $configSkew = Values::NONE, int $configCodeLength = Values::NONE, string $configAlg = Values::NONE) {
        $this->options['bindingAlg'] = $bindingAlg;
        $this->options['bindingPublicKey'] = $bindingPublicKey;
        $this->options['configAppId'] = $configAppId;
        $this->options['configNotificationPlatform'] = $configNotificationPlatform;
        $this->options['configNotificationToken'] = $configNotificationToken;
        $this->options['configSdkVersion'] = $configSdkVersion;
        $this->options['bindingSecret'] = $bindingSecret;
        $this->options['configTimeStep'] = $configTimeStep;
        $this->options['configSkew'] = $configSkew;
        $this->options['configCodeLength'] = $configCodeLength;
        $this->options['configAlg'] = $configAlg;
    }

    /**
     * The algorithm used when `factor_type` is `push`. Algorithm supported: `ES256`
     *
     * @param string $bindingAlg The algorithm used when `factor_type` is `push`
     * @return $this Fluent Builder
     */
    public function setBindingAlg(string $bindingAlg): self {
        $this->options['bindingAlg'] = $bindingAlg;
        return $this;
    }

    /**
     * The Ecdsa public key in PKIX, ASN.1 DER format encoded in Base64
     *
     * @param string $bindingPublicKey The public key encoded in Base64
     * @return $this Fluent Builder
     */
    public function setBindingPublicKey(string $bindingPublicKey): self {
        $this->options['bindingPublicKey'] = $bindingPublicKey;
        return $this;
    }

    /**
     * The ID that uniquely identifies your app in the Google or Apple store, such as `com.example.myapp`. Required when `factor_type` is `push`. If specified, it can be up to 100 characters long.
     *
     * @param string $configAppId The ID that uniquely identifies your app in the
     *                            Google or Apple store
     * @return $this Fluent Builder
     */
    public function setConfigAppId(string $configAppId): self {
        $this->options['configAppId'] = $configAppId;
        return $this;
    }

    /**
     * The transport technology used to generate the Notification Token. Can be `apn` or `fcm`. Required when `factor_type` is `push`
     *
     * @param string $configNotificationPlatform The transport technology used to
     *                                           generate the Notification Token
     * @return $this Fluent Builder
     */
    public function setConfigNotificationPlatform(string $configNotificationPlatform): self {
        $this->options['configNotificationPlatform'] = $configNotificationPlatform;
        return $this;
    }

    /**
     * For APN, the device token. For FCM the registration token. It used to send the push notifications. Required when `factor_type` is `push`. If specified, this value must be between 32 and 255 characters long.
     *
     * @param string $configNotificationToken For APN, the device token. For FCM
     *                                        the registration token
     * @return $this Fluent Builder
     */
    public function setConfigNotificationToken(string $configNotificationToken): self {
        $this->options['configNotificationToken'] = $configNotificationToken;
        return $this;
    }

    /**
     * The Verify Push SDK version used to configure the factor
     *
     * @param string $configSdkVersion The Verify Push SDK version used to
     *                                 configure the factor
     * @return $this Fluent Builder
     */
    public function setConfigSdkVersion(string $configSdkVersion): self {
        $this->options['configSdkVersion'] = $configSdkVersion;
        return $this;
    }

    /**
     * The shared secret for TOTP factors encoded in Base32
     *
     * @param string $bindingSecret The shared secret in Base32
     * @return $this Fluent Builder
     */
    public function setBindingSecret(string $bindingSecret): self {
        $this->options['bindingSecret'] = $bindingSecret;
        return $this;
    }

    /**
     * Defines how often, in seconds, are TOTP codes generated. i.e, a new TOTP code is generated every time_step seconds. Must be between 20 and 60 seconds, inclusive. The default value is defined at the service level in the property totp.time_step. If not configured defaults to 30 seconds
     *
     * @param int $configTimeStep How often, in seconds, are TOTP codes generated
     * @return $this Fluent Builder
     */
    public function setConfigTimeStep(int $configTimeStep): self {
        $this->options['configTimeStep'] = $configTimeStep;
        return $this;
    }

    /**
     * The number of time-steps, past and future, that are valid for validation of TOTP codes. Must be between 0 and 2, inclusive. The default value is defined at the service level in the property totp.skew. If not configured defaults to 1
     *
     * @param int $configSkew The number of past and future time-steps valid at a
     *                        given time
     * @return $this Fluent Builder
     */
    public function setConfigSkew(int $configSkew): self {
        $this->options['configSkew'] = $configSkew;
        return $this;
    }

    /**
     * Number of digits for generated TOTP codes. Must be between 3 and 8, inclusive. The default value is defined at the service level in the property totp.code_length. If not configured defaults to 6
     *
     * @param int $configCodeLength Number of digits for generated TOTP codes
     * @return $this Fluent Builder
     */
    public function setConfigCodeLength(int $configCodeLength): self {
        $this->options['configCodeLength'] = $configCodeLength;
        return $this;
    }

    /**
     * The algorithm used to derive the TOTP codes. Can be `sha1`, `sha256` or `sha512`. Defaults to `sha1`
     *
     * @param string $configAlg The algorithm used to derive the TOTP codes
     * @return $this Fluent Builder
     */
    public function setConfigAlg(string $configAlg): self {
        $this->options['configAlg'] = $configAlg;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Verify.V2.CreateNewFactorOptions ' . $options . ']';
    }
}