<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql.proto

namespace Google\Cloud\Sql\V1beta4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.sql.v1beta4.SqlFlagsListRequest</code>
 */
class SqlFlagsListRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Database type and version you want to retrieve flags for. By default, this
     * method returns flags for all database types and versions.
     *
     * Generated from protobuf field <code>string database_version = 1;</code>
     */
    protected $database_version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $database_version
     *           Database type and version you want to retrieve flags for. By default, this
     *           method returns flags for all database types and versions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1Beta4\CloudSql::initOnce();
        parent::__construct($data);
    }

    /**
     * Database type and version you want to retrieve flags for. By default, this
     * method returns flags for all database types and versions.
     *
     * Generated from protobuf field <code>string database_version = 1;</code>
     * @return string
     */
    public function getDatabaseVersion()
    {
        return $this->database_version;
    }

    /**
     * Database type and version you want to retrieve flags for. By default, this
     * method returns flags for all database types and versions.
     *
     * Generated from protobuf field <code>string database_version = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDatabaseVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->database_version = $var;

        return $this;
    }

}

