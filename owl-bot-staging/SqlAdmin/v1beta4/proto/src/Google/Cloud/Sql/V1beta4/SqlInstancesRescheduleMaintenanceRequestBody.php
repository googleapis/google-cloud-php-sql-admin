<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1beta4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Reschedule options for maintenance windows.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1beta4.SqlInstancesRescheduleMaintenanceRequestBody</code>
 */
class SqlInstancesRescheduleMaintenanceRequestBody extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The type of the reschedule the user wants.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.SqlInstancesRescheduleMaintenanceRequestBody.Reschedule reschedule = 3;</code>
     */
    protected $reschedule = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Sql\V1beta4\SqlInstancesRescheduleMaintenanceRequestBody\Reschedule $reschedule
     *           Required. The type of the reschedule the user wants.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1Beta4\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The type of the reschedule the user wants.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.SqlInstancesRescheduleMaintenanceRequestBody.Reschedule reschedule = 3;</code>
     * @return \Google\Cloud\Sql\V1beta4\SqlInstancesRescheduleMaintenanceRequestBody\Reschedule|null
     */
    public function getReschedule()
    {
        return $this->reschedule;
    }

    public function hasReschedule()
    {
        return isset($this->reschedule);
    }

    public function clearReschedule()
    {
        unset($this->reschedule);
    }

    /**
     * Required. The type of the reschedule the user wants.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.SqlInstancesRescheduleMaintenanceRequestBody.Reschedule reschedule = 3;</code>
     * @param \Google\Cloud\Sql\V1beta4\SqlInstancesRescheduleMaintenanceRequestBody\Reschedule $var
     * @return $this
     */
    public function setReschedule($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Sql\V1beta4\SqlInstancesRescheduleMaintenanceRequestBody\Reschedule::class);
        $this->reschedule = $var;

        return $this;
    }

}

