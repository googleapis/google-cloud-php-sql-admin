<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1beta4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A flag resource.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1beta4.Flag</code>
 */
class Flag extends \Google\Protobuf\Internal\Message
{
    /**
     * This is the name of the flag. Flag names always use underscores, not
     * hyphens, for example: `max_allowed_packet`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * The type of the flag. Flags are typed to being `BOOLEAN`, `STRING`,
     * `INTEGER` or `NONE`. `NONE` is used for flags which do not take a
     * value, such as `skip_grant_tables`.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.SqlFlagType type = 2;</code>
     */
    protected $type = 0;
    /**
     * The database version this flag applies to. Can be
     * MySQL instances: `MYSQL_8_0`, `MYSQL_8_0_18`, `MYSQL_8_0_26`, `MYSQL_5_7`,
     * or `MYSQL_5_6`. PostgreSQL instances: `POSTGRES_9_6`, `POSTGRES_10`,
     * `POSTGRES_11` or `POSTGRES_12`. SQL Server instances:
     * `SQLSERVER_2017_STANDARD`, `SQLSERVER_2017_ENTERPRISE`,
     * `SQLSERVER_2017_EXPRESS`, `SQLSERVER_2017_WEB`, `SQLSERVER_2019_STANDARD`,
     * `SQLSERVER_2019_ENTERPRISE`, `SQLSERVER_2019_EXPRESS`, or
     * `SQLSERVER_2019_WEB`.
     * See [the complete
     * list](/sql/docs/mysql/admin-api/rest/v1/SqlDatabaseVersion).
     *
     * Generated from protobuf field <code>repeated .google.cloud.sql.v1beta4.SqlDatabaseVersion applies_to = 3;</code>
     */
    private $applies_to;
    /**
     * For `STRING` flags, a list of strings that the value can be set to.
     *
     * Generated from protobuf field <code>repeated string allowed_string_values = 4;</code>
     */
    private $allowed_string_values;
    /**
     * For `INTEGER` flags, the minimum allowed value.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value min_value = 5;</code>
     */
    protected $min_value = null;
    /**
     * For `INTEGER` flags, the maximum allowed value.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value max_value = 6;</code>
     */
    protected $max_value = null;
    /**
     * Indicates whether changing this flag will trigger a database restart. Only
     * applicable to Second Generation instances.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue requires_restart = 7;</code>
     */
    protected $requires_restart = null;
    /**
     * This is always `sql#flag`.
     *
     * Generated from protobuf field <code>string kind = 8;</code>
     */
    protected $kind = '';
    /**
     * Whether or not the flag is considered in beta.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue in_beta = 9;</code>
     */
    protected $in_beta = null;
    /**
     * Use this field if only certain integers are accepted. Can be combined
     * with min_value and max_value to add additional values.
     *
     * Generated from protobuf field <code>repeated int64 allowed_int_values = 10;</code>
     */
    private $allowed_int_values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           This is the name of the flag. Flag names always use underscores, not
     *           hyphens, for example: `max_allowed_packet`
     *     @type int $type
     *           The type of the flag. Flags are typed to being `BOOLEAN`, `STRING`,
     *           `INTEGER` or `NONE`. `NONE` is used for flags which do not take a
     *           value, such as `skip_grant_tables`.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $applies_to
     *           The database version this flag applies to. Can be
     *           MySQL instances: `MYSQL_8_0`, `MYSQL_8_0_18`, `MYSQL_8_0_26`, `MYSQL_5_7`,
     *           or `MYSQL_5_6`. PostgreSQL instances: `POSTGRES_9_6`, `POSTGRES_10`,
     *           `POSTGRES_11` or `POSTGRES_12`. SQL Server instances:
     *           `SQLSERVER_2017_STANDARD`, `SQLSERVER_2017_ENTERPRISE`,
     *           `SQLSERVER_2017_EXPRESS`, `SQLSERVER_2017_WEB`, `SQLSERVER_2019_STANDARD`,
     *           `SQLSERVER_2019_ENTERPRISE`, `SQLSERVER_2019_EXPRESS`, or
     *           `SQLSERVER_2019_WEB`.
     *           See [the complete
     *           list](/sql/docs/mysql/admin-api/rest/v1/SqlDatabaseVersion).
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $allowed_string_values
     *           For `STRING` flags, a list of strings that the value can be set to.
     *     @type \Google\Protobuf\Int64Value $min_value
     *           For `INTEGER` flags, the minimum allowed value.
     *     @type \Google\Protobuf\Int64Value $max_value
     *           For `INTEGER` flags, the maximum allowed value.
     *     @type \Google\Protobuf\BoolValue $requires_restart
     *           Indicates whether changing this flag will trigger a database restart. Only
     *           applicable to Second Generation instances.
     *     @type string $kind
     *           This is always `sql#flag`.
     *     @type \Google\Protobuf\BoolValue $in_beta
     *           Whether or not the flag is considered in beta.
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $allowed_int_values
     *           Use this field if only certain integers are accepted. Can be combined
     *           with min_value and max_value to add additional values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1Beta4\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * This is the name of the flag. Flag names always use underscores, not
     * hyphens, for example: `max_allowed_packet`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * This is the name of the flag. Flag names always use underscores, not
     * hyphens, for example: `max_allowed_packet`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The type of the flag. Flags are typed to being `BOOLEAN`, `STRING`,
     * `INTEGER` or `NONE`. `NONE` is used for flags which do not take a
     * value, such as `skip_grant_tables`.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.SqlFlagType type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of the flag. Flags are typed to being `BOOLEAN`, `STRING`,
     * `INTEGER` or `NONE`. `NONE` is used for flags which do not take a
     * value, such as `skip_grant_tables`.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.SqlFlagType type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Sql\V1beta4\SqlFlagType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * The database version this flag applies to. Can be
     * MySQL instances: `MYSQL_8_0`, `MYSQL_8_0_18`, `MYSQL_8_0_26`, `MYSQL_5_7`,
     * or `MYSQL_5_6`. PostgreSQL instances: `POSTGRES_9_6`, `POSTGRES_10`,
     * `POSTGRES_11` or `POSTGRES_12`. SQL Server instances:
     * `SQLSERVER_2017_STANDARD`, `SQLSERVER_2017_ENTERPRISE`,
     * `SQLSERVER_2017_EXPRESS`, `SQLSERVER_2017_WEB`, `SQLSERVER_2019_STANDARD`,
     * `SQLSERVER_2019_ENTERPRISE`, `SQLSERVER_2019_EXPRESS`, or
     * `SQLSERVER_2019_WEB`.
     * See [the complete
     * list](/sql/docs/mysql/admin-api/rest/v1/SqlDatabaseVersion).
     *
     * Generated from protobuf field <code>repeated .google.cloud.sql.v1beta4.SqlDatabaseVersion applies_to = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAppliesTo()
    {
        return $this->applies_to;
    }

    /**
     * The database version this flag applies to. Can be
     * MySQL instances: `MYSQL_8_0`, `MYSQL_8_0_18`, `MYSQL_8_0_26`, `MYSQL_5_7`,
     * or `MYSQL_5_6`. PostgreSQL instances: `POSTGRES_9_6`, `POSTGRES_10`,
     * `POSTGRES_11` or `POSTGRES_12`. SQL Server instances:
     * `SQLSERVER_2017_STANDARD`, `SQLSERVER_2017_ENTERPRISE`,
     * `SQLSERVER_2017_EXPRESS`, `SQLSERVER_2017_WEB`, `SQLSERVER_2019_STANDARD`,
     * `SQLSERVER_2019_ENTERPRISE`, `SQLSERVER_2019_EXPRESS`, or
     * `SQLSERVER_2019_WEB`.
     * See [the complete
     * list](/sql/docs/mysql/admin-api/rest/v1/SqlDatabaseVersion).
     *
     * Generated from protobuf field <code>repeated .google.cloud.sql.v1beta4.SqlDatabaseVersion applies_to = 3;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAppliesTo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\Sql\V1beta4\SqlDatabaseVersion::class);
        $this->applies_to = $arr;

        return $this;
    }

    /**
     * For `STRING` flags, a list of strings that the value can be set to.
     *
     * Generated from protobuf field <code>repeated string allowed_string_values = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowedStringValues()
    {
        return $this->allowed_string_values;
    }

    /**
     * For `STRING` flags, a list of strings that the value can be set to.
     *
     * Generated from protobuf field <code>repeated string allowed_string_values = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowedStringValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->allowed_string_values = $arr;

        return $this;
    }

    /**
     * For `INTEGER` flags, the minimum allowed value.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value min_value = 5;</code>
     * @return \Google\Protobuf\Int64Value|null
     */
    public function getMinValue()
    {
        return $this->min_value;
    }

    public function hasMinValue()
    {
        return isset($this->min_value);
    }

    public function clearMinValue()
    {
        unset($this->min_value);
    }

    /**
     * Returns the unboxed value from <code>getMinValue()</code>

     * For `INTEGER` flags, the minimum allowed value.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value min_value = 5;</code>
     * @return int|string|null
     */
    public function getMinValueUnwrapped()
    {
        return $this->readWrapperValue("min_value");
    }

    /**
     * For `INTEGER` flags, the minimum allowed value.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value min_value = 5;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setMinValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->min_value = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * For `INTEGER` flags, the minimum allowed value.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value min_value = 5;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setMinValueUnwrapped($var)
    {
        $this->writeWrapperValue("min_value", $var);
        return $this;}

    /**
     * For `INTEGER` flags, the maximum allowed value.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value max_value = 6;</code>
     * @return \Google\Protobuf\Int64Value|null
     */
    public function getMaxValue()
    {
        return $this->max_value;
    }

    public function hasMaxValue()
    {
        return isset($this->max_value);
    }

    public function clearMaxValue()
    {
        unset($this->max_value);
    }

    /**
     * Returns the unboxed value from <code>getMaxValue()</code>

     * For `INTEGER` flags, the maximum allowed value.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value max_value = 6;</code>
     * @return int|string|null
     */
    public function getMaxValueUnwrapped()
    {
        return $this->readWrapperValue("max_value");
    }

    /**
     * For `INTEGER` flags, the maximum allowed value.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value max_value = 6;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setMaxValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->max_value = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * For `INTEGER` flags, the maximum allowed value.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value max_value = 6;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setMaxValueUnwrapped($var)
    {
        $this->writeWrapperValue("max_value", $var);
        return $this;}

    /**
     * Indicates whether changing this flag will trigger a database restart. Only
     * applicable to Second Generation instances.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue requires_restart = 7;</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getRequiresRestart()
    {
        return $this->requires_restart;
    }

    public function hasRequiresRestart()
    {
        return isset($this->requires_restart);
    }

    public function clearRequiresRestart()
    {
        unset($this->requires_restart);
    }

    /**
     * Returns the unboxed value from <code>getRequiresRestart()</code>

     * Indicates whether changing this flag will trigger a database restart. Only
     * applicable to Second Generation instances.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue requires_restart = 7;</code>
     * @return bool|null
     */
    public function getRequiresRestartUnwrapped()
    {
        return $this->readWrapperValue("requires_restart");
    }

    /**
     * Indicates whether changing this flag will trigger a database restart. Only
     * applicable to Second Generation instances.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue requires_restart = 7;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setRequiresRestart($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->requires_restart = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Indicates whether changing this flag will trigger a database restart. Only
     * applicable to Second Generation instances.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue requires_restart = 7;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setRequiresRestartUnwrapped($var)
    {
        $this->writeWrapperValue("requires_restart", $var);
        return $this;}

    /**
     * This is always `sql#flag`.
     *
     * Generated from protobuf field <code>string kind = 8;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * This is always `sql#flag`.
     *
     * Generated from protobuf field <code>string kind = 8;</code>
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
     * Whether or not the flag is considered in beta.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue in_beta = 9;</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getInBeta()
    {
        return $this->in_beta;
    }

    public function hasInBeta()
    {
        return isset($this->in_beta);
    }

    public function clearInBeta()
    {
        unset($this->in_beta);
    }

    /**
     * Returns the unboxed value from <code>getInBeta()</code>

     * Whether or not the flag is considered in beta.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue in_beta = 9;</code>
     * @return bool|null
     */
    public function getInBetaUnwrapped()
    {
        return $this->readWrapperValue("in_beta");
    }

    /**
     * Whether or not the flag is considered in beta.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue in_beta = 9;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setInBeta($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->in_beta = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Whether or not the flag is considered in beta.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue in_beta = 9;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setInBetaUnwrapped($var)
    {
        $this->writeWrapperValue("in_beta", $var);
        return $this;}

    /**
     * Use this field if only certain integers are accepted. Can be combined
     * with min_value and max_value to add additional values.
     *
     * Generated from protobuf field <code>repeated int64 allowed_int_values = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowedIntValues()
    {
        return $this->allowed_int_values;
    }

    /**
     * Use this field if only certain integers are accepted. Can be combined
     * with min_value and max_value to add additional values.
     *
     * Generated from protobuf field <code>repeated int64 allowed_int_values = 10;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowedIntValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->allowed_int_values = $arr;

        return $this;
    }

}

