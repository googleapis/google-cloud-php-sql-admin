<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql.proto

namespace Google\Cloud\Sql\V1beta4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Instance switchover request.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1beta4.SqlInstancesSwitchoverRequest</code>
 */
class SqlInstancesSwitchoverRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Cloud SQL read replica instance name.
     *
     * Generated from protobuf field <code>string instance = 1;</code>
     */
    private $instance = '';
    /**
     * ID of the project that contains the replica.
     *
     * Generated from protobuf field <code>string project = 2;</code>
     */
    private $project = '';
    /**
     * Optional. (MySQL only) Cloud SQL instance operations timeout, which is a
     * sum of all database operations. Default value is 10 minutes and can be
     * modified to a maximum value of 24 hours.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration db_timeout = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $db_timeout = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $instance
     *           Cloud SQL read replica instance name.
     *     @type string $project
     *           ID of the project that contains the replica.
     *     @type \Google\Protobuf\Duration $db_timeout
     *           Optional. (MySQL only) Cloud SQL instance operations timeout, which is a
     *           sum of all database operations. Default value is 10 minutes and can be
     *           modified to a maximum value of 24 hours.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1Beta4\CloudSql::initOnce();
        parent::__construct($data);
    }

    /**
     * Cloud SQL read replica instance name.
     *
     * Generated from protobuf field <code>string instance = 1;</code>
     * @return string
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Cloud SQL read replica instance name.
     *
     * Generated from protobuf field <code>string instance = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance = $var;

        return $this;
    }

    /**
     * ID of the project that contains the replica.
     *
     * Generated from protobuf field <code>string project = 2;</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * ID of the project that contains the replica.
     *
     * Generated from protobuf field <code>string project = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * Optional. (MySQL only) Cloud SQL instance operations timeout, which is a
     * sum of all database operations. Default value is 10 minutes and can be
     * modified to a maximum value of 24 hours.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration db_timeout = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getDbTimeout()
    {
        return $this->db_timeout;
    }

    public function hasDbTimeout()
    {
        return isset($this->db_timeout);
    }

    public function clearDbTimeout()
    {
        unset($this->db_timeout);
    }

    /**
     * Optional. (MySQL only) Cloud SQL instance operations timeout, which is a
     * sum of all database operations. Default value is 10 minutes and can be
     * modified to a maximum value of 24 hours.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration db_timeout = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setDbTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->db_timeout = $var;

        return $this;
    }

}
