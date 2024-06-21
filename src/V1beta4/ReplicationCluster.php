<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1beta4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A primary instance and disaster recovery (DR) replica pair.
 * A DR replica is a cross-region replica that you designate for failover
 * in the event that the primary instance has regional failure.
 * Only applicable to MySQL.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1beta4.ReplicationCluster</code>
 */
class ReplicationCluster extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. If set, it indicates this instance has a private service
     * access (PSA) dns endpoint that is pointing to the primary instance of the
     * cluster. If this instance is the primary, the dns should be pointing to
     * this instance. After Switchover or Replica failover, this DNS endpoint
     * points to the promoted instance. This is a read-only field, returned to the
     * user as information. This field can exist even if a standalone instance
     * does not yet have a replica, or had a DR replica that was deleted.
     *
     * Generated from protobuf field <code>optional string psa_write_endpoint = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $psa_write_endpoint = null;
    /**
     * Optional. If the instance is a primary instance, then this field identifies
     * the disaster recovery (DR) replica. A DR replica is an optional
     * configuration for Enterprise Plus edition instances. If the instance is a
     * read replica, then the field is not set. Set this field to a replica name
     * to designate a DR replica for a primary instance. Remove the replica name
     * to remove the DR replica designation.
     *
     * Generated from protobuf field <code>optional string failover_dr_replica_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $failover_dr_replica_name = null;
    /**
     * Output only. Read-only field that indicates whether the replica is a DR
     * replica. This field is not set if the instance is a primary instance.
     *
     * Generated from protobuf field <code>optional bool dr_replica = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $dr_replica = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $psa_write_endpoint
     *           Output only. If set, it indicates this instance has a private service
     *           access (PSA) dns endpoint that is pointing to the primary instance of the
     *           cluster. If this instance is the primary, the dns should be pointing to
     *           this instance. After Switchover or Replica failover, this DNS endpoint
     *           points to the promoted instance. This is a read-only field, returned to the
     *           user as information. This field can exist even if a standalone instance
     *           does not yet have a replica, or had a DR replica that was deleted.
     *     @type string $failover_dr_replica_name
     *           Optional. If the instance is a primary instance, then this field identifies
     *           the disaster recovery (DR) replica. A DR replica is an optional
     *           configuration for Enterprise Plus edition instances. If the instance is a
     *           read replica, then the field is not set. Set this field to a replica name
     *           to designate a DR replica for a primary instance. Remove the replica name
     *           to remove the DR replica designation.
     *     @type bool $dr_replica
     *           Output only. Read-only field that indicates whether the replica is a DR
     *           replica. This field is not set if the instance is a primary instance.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1Beta4\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. If set, it indicates this instance has a private service
     * access (PSA) dns endpoint that is pointing to the primary instance of the
     * cluster. If this instance is the primary, the dns should be pointing to
     * this instance. After Switchover or Replica failover, this DNS endpoint
     * points to the promoted instance. This is a read-only field, returned to the
     * user as information. This field can exist even if a standalone instance
     * does not yet have a replica, or had a DR replica that was deleted.
     *
     * Generated from protobuf field <code>optional string psa_write_endpoint = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getPsaWriteEndpoint()
    {
        return isset($this->psa_write_endpoint) ? $this->psa_write_endpoint : '';
    }

    public function hasPsaWriteEndpoint()
    {
        return isset($this->psa_write_endpoint);
    }

    public function clearPsaWriteEndpoint()
    {
        unset($this->psa_write_endpoint);
    }

    /**
     * Output only. If set, it indicates this instance has a private service
     * access (PSA) dns endpoint that is pointing to the primary instance of the
     * cluster. If this instance is the primary, the dns should be pointing to
     * this instance. After Switchover or Replica failover, this DNS endpoint
     * points to the promoted instance. This is a read-only field, returned to the
     * user as information. This field can exist even if a standalone instance
     * does not yet have a replica, or had a DR replica that was deleted.
     *
     * Generated from protobuf field <code>optional string psa_write_endpoint = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setPsaWriteEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->psa_write_endpoint = $var;

        return $this;
    }

    /**
     * Optional. If the instance is a primary instance, then this field identifies
     * the disaster recovery (DR) replica. A DR replica is an optional
     * configuration for Enterprise Plus edition instances. If the instance is a
     * read replica, then the field is not set. Set this field to a replica name
     * to designate a DR replica for a primary instance. Remove the replica name
     * to remove the DR replica designation.
     *
     * Generated from protobuf field <code>optional string failover_dr_replica_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFailoverDrReplicaName()
    {
        return isset($this->failover_dr_replica_name) ? $this->failover_dr_replica_name : '';
    }

    public function hasFailoverDrReplicaName()
    {
        return isset($this->failover_dr_replica_name);
    }

    public function clearFailoverDrReplicaName()
    {
        unset($this->failover_dr_replica_name);
    }

    /**
     * Optional. If the instance is a primary instance, then this field identifies
     * the disaster recovery (DR) replica. A DR replica is an optional
     * configuration for Enterprise Plus edition instances. If the instance is a
     * read replica, then the field is not set. Set this field to a replica name
     * to designate a DR replica for a primary instance. Remove the replica name
     * to remove the DR replica designation.
     *
     * Generated from protobuf field <code>optional string failover_dr_replica_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFailoverDrReplicaName($var)
    {
        GPBUtil::checkString($var, True);
        $this->failover_dr_replica_name = $var;

        return $this;
    }

    /**
     * Output only. Read-only field that indicates whether the replica is a DR
     * replica. This field is not set if the instance is a primary instance.
     *
     * Generated from protobuf field <code>optional bool dr_replica = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getDrReplica()
    {
        return isset($this->dr_replica) ? $this->dr_replica : false;
    }

    public function hasDrReplica()
    {
        return isset($this->dr_replica);
    }

    public function clearDrReplica()
    {
        unset($this->dr_replica);
    }

    /**
     * Output only. Read-only field that indicates whether the replica is a DR
     * replica. This field is not set if the instance is a primary instance.
     *
     * Generated from protobuf field <code>optional bool dr_replica = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setDrReplica($var)
    {
        GPBUtil::checkBool($var);
        $this->dr_replica = $var;

        return $this;
    }

}

