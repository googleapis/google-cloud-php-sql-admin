<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1beta4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Read-replica configuration specific to MySQL databases.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1beta4.DemoteMasterMySqlReplicaConfiguration</code>
 */
class DemoteMasterMySqlReplicaConfiguration extends \Google\Protobuf\Internal\Message
{
    /**
     * This is always <b>sql#demoteMasterMysqlReplicaConfiguration</b>.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     */
    private $kind = '';
    /**
     * The username for the replication connection.
     *
     * Generated from protobuf field <code>string username = 2;</code>
     */
    private $username = '';
    /**
     * The password for the replication connection.
     *
     * Generated from protobuf field <code>string password = 3;</code>
     */
    private $password = '';
    /**
     * PEM representation of the replica's private key. The corresponsing public
     * key is encoded in the client's certificate. The format of the replica's
     * private key can be either PKCS #1 or PKCS #8.
     *
     * Generated from protobuf field <code>string client_key = 4;</code>
     */
    private $client_key = '';
    /**
     * PEM representation of the replica's x509 certificate.
     *
     * Generated from protobuf field <code>string client_certificate = 5;</code>
     */
    private $client_certificate = '';
    /**
     * PEM representation of the trusted CA's x509 certificate.
     *
     * Generated from protobuf field <code>string ca_certificate = 6;</code>
     */
    private $ca_certificate = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kind
     *           This is always <b>sql#demoteMasterMysqlReplicaConfiguration</b>.
     *     @type string $username
     *           The username for the replication connection.
     *     @type string $password
     *           The password for the replication connection.
     *     @type string $client_key
     *           PEM representation of the replica's private key. The corresponsing public
     *           key is encoded in the client's certificate. The format of the replica's
     *           private key can be either PKCS #1 or PKCS #8.
     *     @type string $client_certificate
     *           PEM representation of the replica's x509 certificate.
     *     @type string $ca_certificate
     *           PEM representation of the trusted CA's x509 certificate.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1Beta4\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * This is always <b>sql#demoteMasterMysqlReplicaConfiguration</b>.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * This is always <b>sql#demoteMasterMysqlReplicaConfiguration</b>.
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
     * The username for the replication connection.
     *
     * Generated from protobuf field <code>string username = 2;</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * The username for the replication connection.
     *
     * Generated from protobuf field <code>string username = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

    /**
     * The password for the replication connection.
     *
     * Generated from protobuf field <code>string password = 3;</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * The password for the replication connection.
     *
     * Generated from protobuf field <code>string password = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

    /**
     * PEM representation of the replica's private key. The corresponsing public
     * key is encoded in the client's certificate. The format of the replica's
     * private key can be either PKCS #1 or PKCS #8.
     *
     * Generated from protobuf field <code>string client_key = 4;</code>
     * @return string
     */
    public function getClientKey()
    {
        return $this->client_key;
    }

    /**
     * PEM representation of the replica's private key. The corresponsing public
     * key is encoded in the client's certificate. The format of the replica's
     * private key can be either PKCS #1 or PKCS #8.
     *
     * Generated from protobuf field <code>string client_key = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setClientKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_key = $var;

        return $this;
    }

    /**
     * PEM representation of the replica's x509 certificate.
     *
     * Generated from protobuf field <code>string client_certificate = 5;</code>
     * @return string
     */
    public function getClientCertificate()
    {
        return $this->client_certificate;
    }

    /**
     * PEM representation of the replica's x509 certificate.
     *
     * Generated from protobuf field <code>string client_certificate = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setClientCertificate($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_certificate = $var;

        return $this;
    }

    /**
     * PEM representation of the trusted CA's x509 certificate.
     *
     * Generated from protobuf field <code>string ca_certificate = 6;</code>
     * @return string
     */
    public function getCaCertificate()
    {
        return $this->ca_certificate;
    }

    /**
     * PEM representation of the trusted CA's x509 certificate.
     *
     * Generated from protobuf field <code>string ca_certificate = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setCaCertificate($var)
    {
        GPBUtil::checkString($var, True);
        $this->ca_certificate = $var;

        return $this;
    }

}

