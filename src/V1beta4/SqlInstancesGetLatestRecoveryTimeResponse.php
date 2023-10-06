<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql.proto

namespace Google\Cloud\Sql\V1beta4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Instance get latest recovery time response.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1beta4.SqlInstancesGetLatestRecoveryTimeResponse</code>
 */
class SqlInstancesGetLatestRecoveryTimeResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * This is always `sql#getLatestRecoveryTime`.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     */
    private $kind = '';
    /**
     * Timestamp, identifies the latest recovery time of the source instance.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp latest_recovery_time = 2;</code>
     */
    private $latest_recovery_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kind
     *           This is always `sql#getLatestRecoveryTime`.
     *     @type \Google\Protobuf\Timestamp $latest_recovery_time
     *           Timestamp, identifies the latest recovery time of the source instance.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1Beta4\CloudSql::initOnce();
        parent::__construct($data);
    }

    /**
     * This is always `sql#getLatestRecoveryTime`.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * This is always `sql#getLatestRecoveryTime`.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * Timestamp, identifies the latest recovery time of the source instance.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp latest_recovery_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLatestRecoveryTime()
    {
        return $this->latest_recovery_time;
    }

    public function hasLatestRecoveryTime()
    {
        return isset($this->latest_recovery_time);
    }

    public function clearLatestRecoveryTime()
    {
        unset($this->latest_recovery_time);
    }

    /**
     * Timestamp, identifies the latest recovery time of the source instance.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp latest_recovery_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLatestRecoveryTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->latest_recovery_time = $var;

        return $this;
    }

}
