<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Backup context.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1.BackupContext</code>
 */
class BackupContext extends \Google\Protobuf\Internal\Message
{
    /**
     * The identifier of the backup.
     *
     * Generated from protobuf field <code>int64 backup_id = 1;</code>
     */
    protected $backup_id = 0;
    /**
     * This is always `sql#backupContext`.
     *
     * Generated from protobuf field <code>string kind = 2;</code>
     */
    protected $kind = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $backup_id
     *           The identifier of the backup.
     *     @type string $kind
     *           This is always `sql#backupContext`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * The identifier of the backup.
     *
     * Generated from protobuf field <code>int64 backup_id = 1;</code>
     * @return int|string
     */
    public function getBackupId()
    {
        return $this->backup_id;
    }

    /**
     * The identifier of the backup.
     *
     * Generated from protobuf field <code>int64 backup_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBackupId($var)
    {
        GPBUtil::checkInt64($var);
        $this->backup_id = $var;

        return $this;
    }

    /**
     * This is always `sql#backupContext`.
     *
     * Generated from protobuf field <code>string kind = 2;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * This is always `sql#backupContext`.
     *
     * Generated from protobuf field <code>string kind = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

}

