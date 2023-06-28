<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_instances.proto

namespace GPBMetadata\Google\Cloud\Sql\V1;

class CloudSqlInstances
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlResources::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(
            '
��
-google/cloud/sql/v1/cloud_sql_instances.protogoogle.cloud.sql.v1google/api/client.protogoogle/api/field_behavior.proto-google/cloud/sql/v1/cloud_sql_resources.protogoogle/protobuf/timestamp.protogoogle/protobuf/wrappers.proto"C
SqlInstancesAddServerCaRequest
instance (	
project (	"w
SqlInstancesCloneRequest
instance (	
project (	8
bodyd (2*.google.cloud.sql.v1.InstancesCloneRequest">
SqlInstancesDeleteRequest
instance (	
project (	"�
SqlInstancesDemoteMasterRequest
instance (	
project (	?
bodyd (21.google.cloud.sql.v1.InstancesDemoteMasterRequest"y
SqlInstancesExportRequest
instance (	
project (	9
bodyd (2+.google.cloud.sql.v1.InstancesExportRequest"}
SqlInstancesFailoverRequest
instance (	
project (	;
bodyd (2-.google.cloud.sql.v1.InstancesFailoverRequest";
SqlInstancesGetRequest
instance (	
project (	"y
SqlInstancesImportRequest
instance (	
project (	9
bodyd (2+.google.cloud.sql.v1.InstancesImportRequest"a
SqlInstancesInsertRequest
project (	3
bodyd (2%.google.cloud.sql.v1.DatabaseInstance"c
SqlInstancesListRequest
filter (	
max_results (

page_token (	
project (	"E
 SqlInstancesListServerCasRequest
instance (	
project (	"r
SqlInstancesPatchRequest
instance (	
project (	3
bodyd (2%.google.cloud.sql.v1.DatabaseInstance"F
!SqlInstancesPromoteReplicaRequest
instance (	
project (	"F
!SqlInstancesResetSslConfigRequest
instance (	
project (	"?
SqlInstancesRestartRequest
instance (	
project (	"�
 SqlInstancesRestoreBackupRequest
instance (	
project (	@
bodyd (22.google.cloud.sql.v1.InstancesRestoreBackupRequest"�
!SqlInstancesRotateServerCaRequest
instance (	
project (	A
bodyd (23.google.cloud.sql.v1.InstancesRotateServerCaRequest"D
SqlInstancesStartReplicaRequest
instance (	
project (	"C
SqlInstancesStopReplicaRequest
instance (	
project (	"�
SqlInstancesTruncateLogRequest
instance (	
project (	>
bodyd (20.google.cloud.sql.v1.InstancesTruncateLogRequest"�
$SqlInstancesPerformDiskShrinkRequest
instance (	
project (	;
bodyd (2-.google.cloud.sql.v1.PerformDiskShrinkContext"s
SqlInstancesUpdateRequest
instance (	
project (	3
bodyd (2%.google.cloud.sql.v1.DatabaseInstance"�
(SqlInstancesRescheduleMaintenanceRequest
instance (	
project (	O
bodyd (2A.google.cloud.sql.v1.SqlInstancesRescheduleMaintenanceRequestBody"
SqlInstancesReencryptRequest
instance (	
project (	<
body (2..google.cloud.sql.v1.InstancesReencryptRequest"�
InstancesReencryptRequestV
backup_reencryption_config (2-.google.cloud.sql.v1.BackupReencryptionConfigH �B
_backup_reencryption_config"�
BackupReencryptionConfig
backup_limit (H �R
backup_type (28.google.cloud.sql.v1.BackupReencryptionConfig.BackupTypeH�"G

BackupType
BACKUP_TYPE_UNSPECIFIED 
	AUTOMATED
	ON_DEMANDB
_backup_limitB
_backup_type"K
&SqlInstancesGetDiskShrinkConfigRequest
instance (	
project (	"�
-SqlInstancesVerifyExternalSyncSettingsRequest
instance (	
project (	
verify_connection_only (f
	sync_mode (2S.google.cloud.sql.v1.SqlInstancesVerifyExternalSyncSettingsRequest.ExternalSyncMode$
verify_replication_only (B�AF
mysql_sync_config (2$.google.cloud.sql.v1.MySqlSyncConfigB�AH "O
ExternalSyncMode"
EXTERNAL_SYNC_MODE_UNSPECIFIED 

ONLINE
OFFLINEB
sync_config"�
$SqlInstancesStartExternalSyncRequest
instance (	
project (	f
	sync_mode (2S.google.cloud.sql.v1.SqlInstancesVerifyExternalSyncSettingsRequest.ExternalSyncMode
skip_verification (A
mysql_sync_config (2$.google.cloud.sql.v1.MySqlSyncConfigH u
sync_parallel_level (2S.google.cloud.sql.v1.SqlInstancesStartExternalSyncRequest.ExternalSyncParallelLevelB�A"h
ExternalSyncParallelLevel,
(EXTERNAL_SYNC_PARALLEL_LEVEL_UNSPECIFIED 
MIN
OPTIMAL
MAXB
sync_config"H
#SqlInstancesResetReplicaSizeRequest
instance (	
project (	"�
&SqlInstancesCreateEphemeralCertRequest
instance (	
project (	A
bodyd (23.google.cloud.sql.v1.SslCertsCreateEphemeralRequest"Q
InstancesCloneRequest8
clone_context (2!.google.cloud.sql.v1.CloneContext"g
InstancesDemoteMasterRequestG
demote_master_context (2(.google.cloud.sql.v1.DemoteMasterContext"T
InstancesExportRequest:
export_context (2".google.cloud.sql.v1.ExportContext"Z
InstancesFailoverRequest>
failover_context (2$.google.cloud.sql.v1.FailoverContext"J
SslCertsCreateEphemeralRequest

public_key (	
access_token (	"T
InstancesImportRequest:
import_context (2".google.cloud.sql.v1.ImportContext"�
InstancesListResponse
kind (	1
warnings (2.google.cloud.sql.v1.ApiWarning4
items (2%.google.cloud.sql.v1.DatabaseInstance
next_page_token (	"s
InstancesListServerCasResponse+
certs (2.google.cloud.sql.v1.SslCert
active_version (	
kind (	"j
InstancesRestoreBackupRequestI
restore_backup_context (2).google.cloud.sql.v1.RestoreBackupContext"n
InstancesRotateServerCaRequestL
rotate_server_ca_context (2*.google.cloud.sql.v1.RotateServerCaContext"d
InstancesTruncateLogRequestE
truncate_log_context (2\'.google.cloud.sql.v1.TruncateLogContext"�
.SqlInstancesVerifyExternalSyncSettingsResponse
kind (	@
errors (20.google.cloud.sql.v1.SqlExternalSyncSettingErrorB
warnings (20.google.cloud.sql.v1.SqlExternalSyncSettingError"h
\'SqlInstancesGetDiskShrinkConfigResponse
kind (	
minimal_target_size_gb (
message (	"�
CloneContext
kind (	
pitr_timestamp_ms (!
destination_instance_name (	C
bin_log_coordinates (2&.google.cloud.sql.v1.BinLogCoordinates1
point_in_time (2.google.protobuf.Timestamp
allocated_ip_range (	
database_names	 (	"V
BinLogCoordinates
bin_log_file_name (	
bin_log_position (
kind (	"�
DatabaseInstance
kind (	E
state (26.google.cloud.sql.v1.DatabaseInstance.SqlInstanceStateA
database_version (2\'.google.cloud.sql.v1.SqlDatabaseVersion/
settings (2.google.cloud.sql.v1.Settings
etag (	R
failover_replica (28.google.cloud.sql.v1.DatabaseInstance.SqlFailoverReplica
master_instance_name (	
replica_names (	6
max_disk_size	 (2.google.protobuf.Int64ValueB:
current_disk_size
 (2.google.protobuf.Int64ValueB4
ip_addresses (2.google.cloud.sql.v1.IpMapping4
server_ca_cert (2.google.cloud.sql.v1.SslCert;
instance_type (2$.google.cloud.sql.v1.SqlInstanceType
project (	
ipv6_address (	B%
service_account_email_address (	O
on_premises_configuration (2,.google.cloud.sql.v1.OnPremisesConfigurationH
replica_configuration (2).google.cloud.sql.v1.ReplicaConfiguration9
backend_type (2#.google.cloud.sql.v1.SqlBackendType
	self_link (	C
suspension_reason (2(.google.cloud.sql.v1.SqlSuspensionReason
connection_name (	
name (	
region (	
gce_zone (	
secondary_gce_zone" (	W
disk_encryption_configuration (20.google.cloud.sql.v1.DiskEncryptionConfigurationI
disk_encryption_status (2).google.cloud.sql.v1.DiskEncryptionStatus
root_password (	\\
scheduled_maintenance (2=.google.cloud.sql.v1.DatabaseInstance.SqlScheduledMaintenance1
satisfies_pzs# (2.google.protobuf.BoolValue\'
database_installed_version( (	B�AY
out_of_disk_report& (28.google.cloud.sql.v1.DatabaseInstance.SqlOutOfDiskReportH �4
create_time\' (2.google.protobuf.TimestampB�A+
available_maintenance_versions) (	B�A
maintenance_version* (	Q
SqlFailoverReplica
name (	-
	available (2.google.protobuf.BoolValue�
SqlScheduledMaintenance.

start_time (2.google.protobuf.Timestamp
	can_defer (B
can_reschedule (?
schedule_deadline_time (2.google.protobuf.TimestampH �B
_schedule_deadline_time�
SqlOutOfDiskReportn
sql_out_of_disk_state (2J.google.cloud.sql.v1.DatabaseInstance.SqlOutOfDiskReport.SqlOutOfDiskStateH �1
$sql_min_recommended_increase_size_gb (H�"Y
SqlOutOfDiskState%
!SQL_OUT_OF_DISK_STATE_UNSPECIFIED 

NORMAL
SOFT_SHUTDOWNB
_sql_out_of_disk_stateB\'
%_sql_min_recommended_increase_size_gb"�
SqlInstanceState"
SQL_INSTANCE_STATE_UNSPECIFIED 
RUNNABLE
	SUSPENDED
PENDING_DELETE
PENDING_CREATE
MAINTENANCE

FAILED
ONLINE_MAINTENANCEB
_out_of_disk_report"�
,SqlInstancesRescheduleMaintenanceRequestBody`

reschedule (2L.google.cloud.sql.v1.SqlInstancesRescheduleMaintenanceRequestBody.Reschedule�

Reschedulei
reschedule_type (2P.google.cloud.sql.v1.SqlInstancesRescheduleMaintenanceRequestBody.RescheduleType6
schedule_time (2.google.protobuf.TimestampB�A"n
RescheduleType
RESCHEDULE_TYPE_UNSPECIFIED 
	IMMEDIATE
NEXT_AVAILABLE_WINDOW
SPECIFIC_TIME"�
DemoteMasterContext
kind (	;
verify_gtid_consistency (2.google.protobuf.BoolValue
master_instance_name (	M
replica_configuration (2..google.cloud.sql.v1.DemoteMasterConfiguration
skip_replication_setup ("9
FailoverContext
settings_version (
kind (	"a
RestoreBackupContext
kind (	
backup_run_id (
instance_id (	
project (	";
RotateServerCaContext
kind (	
next_version (	"4
TruncateLogContext
kind (	
log_type (	"�	
SqlExternalSyncSettingError
kind (	^
type (2P.google.cloud.sql.v1.SqlExternalSyncSettingError.SqlExternalSyncSettingErrorType
detail (	"�
SqlExternalSyncSettingErrorType4
0SQL_EXTERNAL_SYNC_SETTING_ERROR_TYPE_UNSPECIFIED 
CONNECTION_FAILURE
BINLOG_NOT_ENABLED!
INCOMPATIBLE_DATABASE_VERSION
REPLICA_ALREADY_SETUP
INSUFFICIENT_PRIVILEGE
UNSUPPORTED_MIGRATION_TYPE
NO_PGLOGICAL_INSTALLED!
PGLOGICAL_NODE_ALREADY_EXISTS
INVALID_WAL_LEVEL	"
INVALID_SHARED_PRELOAD_LIBRARY
&
"INSUFFICIENT_MAX_REPLICATION_SLOTS 
INSUFFICIENT_MAX_WAL_SENDERS%
!INSUFFICIENT_MAX_WORKER_PROCESSES
UNSUPPORTED_EXTENSIONS#
INVALID_RDS_LOGICAL_REPLICATION
INVALID_LOGGING_SETUP
INVALID_DB_PARAM
UNSUPPORTED_GTID_MODE
SQLSERVER_AGENT_NOT_RUNNING 
UNSUPPORTED_TABLE_DEFINITION
UNSUPPORTED_DEFINER!
SQLSERVER_SERVERNAME_MISMATCH
PRIMARY_ALREADY_SETUP
UNSUPPORTED_BINLOG_FORMAT
BINLOG_RETENTION_SETTING
UNSUPPORTED_STORAGE_ENGINE
LIMITED_SUPPORT_TABLES
EXISTING_DATA_IN_REPLICA
MISSING_OPTIONAL_PRIVILEGES 
RISKY_BACKUP_ADMIN_PRIVILEGE 
INSUFFICIENT_GCS_PERMISSIONS
INVALID_FILE_INFO !
UNSUPPORTED_DATABASE_SETTINGS!"�
OnPremisesConfiguration
	host_port (	
kind (	
username (	
password (	
ca_certificate (	
client_certificate (	

client_key (	
dump_file_path (	?
source_instance (2&.google.cloud.sql.v1.InstanceReference"�
ReplicaConfiguration
kind (	S
mysql_replica_configuration (2..google.cloud.sql.v1.MySqlReplicaConfiguration3
failover_target (2.google.protobuf.BoolValue*�
SqlInstanceType!
SQL_INSTANCE_TYPE_UNSPECIFIED 
CLOUD_SQL_INSTANCE
ON_PREMISES_INSTANCE
READ_REPLICA_INSTANCE*�
SqlSuspensionReason%
!SQL_SUSPENSION_REASON_UNSPECIFIED 
BILLING_ISSUE
LEGAL_ISSUE
OPERATIONAL_ISSUE
KMS_KEY_ISSUE2�(
SqlInstancesService�
AddServerCa3.google.cloud.sql.v1.SqlInstancesAddServerCaRequest.google.cloud.sql.v1.Operation"?���9"7/v1/projects/{project}/instances/{instance}/addServerCa�
Clone-.google.cloud.sql.v1.SqlInstancesCloneRequest.google.cloud.sql.v1.Operation"?���9"1/v1/projects/{project}/instances/{instance}/clone:body�
Delete..google.cloud.sql.v1.SqlInstancesDeleteRequest.google.cloud.sql.v1.Operation"3���-*+/v1/projects/{project}/instances/{instance}�
DemoteMaster4.google.cloud.sql.v1.SqlInstancesDemoteMasterRequest.google.cloud.sql.v1.Operation"F���@"8/v1/projects/{project}/instances/{instance}/demoteMaster:body�
Export..google.cloud.sql.v1.SqlInstancesExportRequest.google.cloud.sql.v1.Operation"@���:"2/v1/projects/{project}/instances/{instance}/export:body�
Failover0.google.cloud.sql.v1.SqlInstancesFailoverRequest.google.cloud.sql.v1.Operation"B���<"4/v1/projects/{project}/instances/{instance}/failover:body�
	Reencrypt1.google.cloud.sql.v1.SqlInstancesReencryptRequest.google.cloud.sql.v1.Operation"C���="5/v1/projects/{project}/instances/{instance}/reencrypt:body�
Get+.google.cloud.sql.v1.SqlInstancesGetRequest%.google.cloud.sql.v1.DatabaseInstance"3���-+/v1/projects/{project}/instances/{instance}�
Import..google.cloud.sql.v1.SqlInstancesImportRequest.google.cloud.sql.v1.Operation"@���:"2/v1/projects/{project}/instances/{instance}/import:body�
Insert..google.cloud.sql.v1.SqlInstancesInsertRequest.google.cloud.sql.v1.Operation".���(" /v1/projects/{project}/instances:body�
List,.google.cloud.sql.v1.SqlInstancesListRequest*.google.cloud.sql.v1.InstancesListResponse"(���" /v1/projects/{project}/instances�
ListServerCas5.google.cloud.sql.v1.SqlInstancesListServerCasRequest3.google.cloud.sql.v1.InstancesListServerCasResponse"A���;9/v1/projects/{project}/instances/{instance}/listServerCas�
Patch-.google.cloud.sql.v1.SqlInstancesPatchRequest.google.cloud.sql.v1.Operation"9���32+/v1/projects/{project}/instances/{instance}:body�
PromoteReplica6.google.cloud.sql.v1.SqlInstancesPromoteReplicaRequest.google.cloud.sql.v1.Operation"B���<":/v1/projects/{project}/instances/{instance}/promoteReplica�
ResetSslConfig6.google.cloud.sql.v1.SqlInstancesResetSslConfigRequest.google.cloud.sql.v1.Operation"B���<":/v1/projects/{project}/instances/{instance}/resetSslConfig�
Restart/.google.cloud.sql.v1.SqlInstancesRestartRequest.google.cloud.sql.v1.Operation";���5"3/v1/projects/{project}/instances/{instance}/restart�
RestoreBackup5.google.cloud.sql.v1.SqlInstancesRestoreBackupRequest.google.cloud.sql.v1.Operation"G���A"9/v1/projects/{project}/instances/{instance}/restoreBackup:body�
RotateServerCa6.google.cloud.sql.v1.SqlInstancesRotateServerCaRequest.google.cloud.sql.v1.Operation"H���B":/v1/projects/{project}/instances/{instance}/rotateServerCa:body�
StartReplica4.google.cloud.sql.v1.SqlInstancesStartReplicaRequest.google.cloud.sql.v1.Operation"@���:"8/v1/projects/{project}/instances/{instance}/startReplica�
StopReplica3.google.cloud.sql.v1.SqlInstancesStopReplicaRequest.google.cloud.sql.v1.Operation"?���9"7/v1/projects/{project}/instances/{instance}/stopReplica�
TruncateLog3.google.cloud.sql.v1.SqlInstancesTruncateLogRequest.google.cloud.sql.v1.Operation"E���?"7/v1/projects/{project}/instances/{instance}/truncateLog:body�
Update..google.cloud.sql.v1.SqlInstancesUpdateRequest.google.cloud.sql.v1.Operation"9���3+/v1/projects/{project}/instances/{instance}:body�
CreateEphemeral;.google.cloud.sql.v1.SqlInstancesCreateEphemeralCertRequest.google.cloud.sql.v1.SslCert"I���C";/v1/projects/{project}/instances/{instance}/createEphemeral:body�
RescheduleMaintenance=.google.cloud.sql.v1.SqlInstancesRescheduleMaintenanceRequest.google.cloud.sql.v1.Operation"O���I"A/v1/projects/{project}/instances/{instance}/rescheduleMaintenance:body�
VerifyExternalSyncSettingsB.google.cloud.sql.v1.SqlInstancesVerifyExternalSyncSettingsRequestC.google.cloud.sql.v1.SqlInstancesVerifyExternalSyncSettingsResponse"Q���K"F/v1/projects/{project}/instances/{instance}/verifyExternalSyncSettings:*�
StartExternalSync9.google.cloud.sql.v1.SqlInstancesStartExternalSyncRequest.google.cloud.sql.v1.Operation"H���B"=/v1/projects/{project}/instances/{instance}/startExternalSync:*�
PerformDiskShrink9.google.cloud.sql.v1.SqlInstancesPerformDiskShrinkRequest.google.cloud.sql.v1.Operation"K���E"=/v1/projects/{project}/instances/{instance}/performDiskShrink:body�
GetDiskShrinkConfig;.google.cloud.sql.v1.SqlInstancesGetDiskShrinkConfigRequest<.google.cloud.sql.v1.SqlInstancesGetDiskShrinkConfigResponse"G���A?/v1/projects/{project}/instances/{instance}/getDiskShrinkConfig�
ResetReplicaSize8.google.cloud.sql.v1.SqlInstancesResetReplicaSizeRequest.google.cloud.sql.v1.Operation"G���A"</v1/projects/{project}/instances/{instance}/resetReplicaSize:*|�Asqladmin.googleapis.com�A_https://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/sqlservice.adminB\\
com.google.cloud.sql.v1BCloudSqlServiceProtoPZ)cloud.google.com/go/sql/apiv1/sqlpb;sqlpbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

