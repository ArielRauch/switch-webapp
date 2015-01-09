<?php
//for more information open the readme.txt file in the root of the SDK


namespace switchclient;

class anonymous0 {
    
}

class arrayCoordinate {
    
}

class WSArray {

    public $any; // <anyXML>
    public $arrayType; // string
    public $offset; // arrayCoordinate
    public $id; // ID
    public $href; // anyURI

}

class Struct {

    public $any; // <anyXML>
    public $id; // ID
    public $href; // anyURI

}

class base64 {
    
}

class duration {

    public $_; // duration
    public $id; // ID
    public $href; // anyURI

}

class dateTime {

    public $_; // dateTime
    public $id; // ID
    public $href; // anyURI

}

class NOTATION {

    public $_; // QName
    public $id; // ID
    public $href; // anyURI

}

class time {

    public $_; // time
    public $id; // ID
    public $href; // anyURI

}

class date {

    public $_; // date
    public $id; // ID
    public $href; // anyURI

}

class gYearMonth {

    public $_; // gYearMonth
    public $id; // ID
    public $href; // anyURI

}

class gYear {

    public $_; // gYear
    public $id; // ID
    public $href; // anyURI

}

class gMonthDay {

    public $_; // gMonthDay
    public $id; // ID
    public $href; // anyURI

}

class gDay {

    public $_; // gDay
    public $id; // ID
    public $href; // anyURI

}

class gMonth {

    public $_; // gMonth
    public $id; // ID
    public $href; // anyURI

}

class boolean {

    public $_; // boolean
    public $id; // ID
    public $href; // anyURI

}

class base64Binary {

    public $_; // base64Binary
    public $id; // ID
    public $href; // anyURI

}

class hexBinary {

    public $_; // hexBinary
    public $id; // ID
    public $href; // anyURI

}

class float {

    public $_; // float
    public $id; // ID
    public $href; // anyURI

}

class double {

    public $_; // double
    public $id; // ID
    public $href; // anyURI

}

class anyURI {

    public $_; // anyURI
    public $id; // ID
    public $href; // anyURI

}

class QName {

    public $_; // QName
    public $id; // ID
    public $href; // anyURI

}

class string {

    public $_; // string
    public $id; // ID
    public $href; // anyURI

}

class normalizedString {

    public $_; // normalizedString
    public $id; // ID
    public $href; // anyURI

}

class token {

    public $_; // token
    public $id; // ID
    public $href; // anyURI

}

class language {

    public $_; // language
    public $id; // ID
    public $href; // anyURI

}

class Name {

    public $_; // Name
    public $id; // ID
    public $href; // anyURI

}

class NMTOKEN {

    public $_; // NMTOKEN
    public $id; // ID
    public $href; // anyURI

}

class NCName {

    public $_; // NCName
    public $id; // ID
    public $href; // anyURI

}

class NMTOKENS {

    public $_; // NMTOKENS
    public $id; // ID
    public $href; // anyURI

}

class ID {

    public $_; // ID
    public $id; // ID
    public $href; // anyURI

}

class IDREF {

    public $_; // IDREF
    public $id; // ID
    public $href; // anyURI

}

class ENTITY {

    public $_; // ENTITY
    public $id; // ID
    public $href; // anyURI

}

class IDREFS {

    public $_; // IDREFS
    public $id; // ID
    public $href; // anyURI

}

class ENTITIES {

    public $_; // ENTITIES
    public $id; // ID
    public $href; // anyURI

}

class decimal {

    public $_; // decimal
    public $id; // ID
    public $href; // anyURI

}

class integer {

    public $_; // integer
    public $id; // ID
    public $href; // anyURI

}

class nonPositiveInteger {

    public $_; // nonPositiveInteger
    public $id; // ID
    public $href; // anyURI

}

class negativeInteger {

    public $_; // negativeInteger
    public $id; // ID
    public $href; // anyURI

}

class long {

    public $_; // long
    public $id; // ID
    public $href; // anyURI

}

class int {

    public $_; // int
    public $id; // ID
    public $href; // anyURI

}

class short {

    public $_; // short
    public $id; // ID
    public $href; // anyURI

}

class byte {

    public $_; // byte
    public $id; // ID
    public $href; // anyURI

}

class nonNegativeInteger {

    public $_; // nonNegativeInteger
    public $id; // ID
    public $href; // anyURI

}

class unsignedLong {

    public $_; // unsignedLong
    public $id; // ID
    public $href; // anyURI

}

class unsignedInt {

    public $_; // unsignedInt
    public $id; // ID
    public $href; // anyURI

}

class unsignedShort {

    public $_; // unsignedShort
    public $id; // ID
    public $href; // anyURI

}

class unsignedByte {

    public $_; // unsignedByte
    public $id; // ID
    public $href; // anyURI

}

class positiveInteger {

    public $_; // positiveInteger
    public $id; // ID
    public $href; // anyURI

}

class Status {

    public $mServerName; // string
    public $mStatus; // string
    public $mFlavourName; // string
    public $mReleaseVersionNumber; // int
    public $mReleaseType; // string
    public $mReleaseTypeNumber; // int
    public $mUpdateVersionNumber; // int
    public $mOperatingSystemName; // string

}

class EntryPoint {

    public $mId; // int
    public $mName; // string
    public $mDescription; // string

}

class Selection {

    public $mName; // string
    public $mDescription; // string

}

class UserSelection {

    public $mJobId; // string
    public $mName; // string
    public $mDescription; // string
    public $mChoices; // Selection
    public $mChoicesMade; // string
    public $mExclusive; // boolean
    public $mCouldDownload; // boolean
    public $mCouldUpload; // boolean

}

class SubmitEntry {

    public $flowId; // string
    public $submitPointId; // string
    public $jobName; // string
    public $jobOrigin; // string
    public $metadataXmlStr; // string

}

class ReplaceEntry {

    public $flowId; // string
    public $checkPointId; // string
    public $jobId; // string
    public $fileName; // string

}

class ConnectionState {

    public $connectionId; // string
    public $connectionName; // string

}

class MetadataToFillClass {

    public $mtfLabel; // string
    public $mtfDescription; // string
    public $mtfDataType; // string
    public $mtfDataFormat; // string
    public $mtfValueIsRequired; // boolean
    public $mtfRememberLastValue; // boolean
    public $mtfValue; // string

}

class MetadataToDisplayClass {

    public $mtdLabel; // string
    public $mtdDescription; // string
    public $mtdDataType; // string
    public $mtdValue; // string

}

class JobStatus {

    public $jobAllowMultipleOutputs; // boolean
    public $jobEnableReportViewing; // boolean
    public $jobAllowReplacingJob; // boolean
    public $jobName; // string
    public $jobReportName; // string
    public $fullUserName; // string
    public $jobSize; // int
    public $jobSubmitTime; // string
    public $jobWaitingTime; // string
    public $connections; // ConnectionState
    public $jobMetadata; // MetadataToDisplayClass
    public $jobRequiresMetadata; // boolean
    public $jobRequiredMetadata; // MetadataToFillClass

}

class JobIdStatus {

    public $jobId; // string
    public $jobInfo; // JobStatus

}

class PushJobStatus {

    public $jobRequiredMetadata; // MetadataToFillClass
    public $metadataXmlStr; // string
    public $connectionIds; // string
    public $jobName; // string

}

class SubmitPointData {

    public $name; // string
    public $displayName; // string
    public $displayThumbnailBase64; // string
    public $metadataXmlStr; // string
    public $metadata; // MetadataToFillClass

}
class CheckPointData {

    public $name; // string
    public $displayName; // string
    public $displayThumbnailBase64; // string
    public $metadataXmlStr; // string
    public $metadata; // MetadataToFillClass

}

class LoggedRecord {

    public $recId; // int
    public $timeStamp; // string
    public $module; // string
    public $serverName; // string
    public $flowName; // string
    public $jobName; // string
    public $message; // string
    public $type; // string

}

class ProgressRecord {

    public $fullUserName; // string
    public $jobName; // string
    public $serverName; // string
    public $flowName; // string
    public $submitPoint; // string
    public $submittedTime; // string
    public $state; // string
    public $enteredState; // string
    public $onHold; // string
    public $checkpoint; // string

}

class ConnectionInfo {

    public $connId; // string
    public $connName; // string

}

class UserJob {

    public $jobType; // int
    public $pointId; // string
    public $pointName; // string
    public $flowId; // string
    public $isRequiresMetadata; // boolean
    public $isAllowMultipleOutputs; // boolean
    public $pushConnections; // ConnectionInfo
    public $isEnableReportViewing; // boolean
    public $reportFileName; // string
    public $isAllowReplacingJob; // boolean
    public $prefix; // string
    public $name; // string
    public $fileType; // string
    public $size; // long
    public $files; // int
    public $pages; // int
    public $dimensionHor; // int
    public $dimensionVer; // int
    public $modified; // string
    public $flowName; // string
    public $holdConnection; // ConnectionInfo
    public $onHoldSince; // string
    public $userName; // string
    public $submittedTo; // string
    public $initiated; // string
    public $checkpointName; // string
    public $onAlertSince; // string
    public $state; // string
    public $inStateSince; // string
    public $dispMetadata; // MetadataToDisplayClass
    public $fillMetadata; // MetadataToFillClass
    public $metadataXmlStr; // string
    public $backingItemAccessible; // boolean
    public $additionalDataComplete; // boolean
    public $metadataComplete; // boolean
    public $internalError; // int

}

class HeavyInfoID {

    public $stamp; // string
    public $jobId; // string
    public $retrieveThumbnail; // boolean
    public $thumbnailSize; // int
    public $retrievePages; // boolean
    public $retrieveDimHor; // boolean
    public $retrieveDimVer; // boolean

}

class HeavyInfo {

    public $status; // int
    public $stamp; // string
    public $jobId; // string
    public $thumbnailBase64; // string
    public $pages; // int
    public $dimensionHor; // int
    public $dimensionVer; // int

}

class AdditionalInfoID {

    public $jobId; // string

}

class AdditionalInfo {

    public $status; // int
    public $jobId; // string
    public $fileType; // string
    public $size; // long
    public $files; // int
    public $modified; // string

}

class MetadataInfoID {

    public $jobId; // string

}

class MetadataInfo {

    public $status; // int
    public $jobId; // string
    public $dispMetadata; // MetadataToDisplayClass
    public $fillMetadata; // MetadataToFillClass

}

class CheckConnect {
    
}

class CheckConnectResponse {

    public $param1; // int

}

class GetCompressClientJobs {
    
}

class GetCompressClientJobsResponse {

    public $param2; // boolean

}

class CheckUserNameAndPass {
    
}

class CheckUserNameAndPassResponse {

    public $param3; // int

}

class CloseConnection {
    
}

class CloseConnectionResponse {

    public $param4; // int

}

class GetStatus {
    
}

class GetStatusResponse {

    public $res; // Status

}

class SubmitFile {

    public $inEntry; // SubmitEntry
    public $inSubmitData; // base64Binary
    public $metadata; // MetadataToFillClass

}

class SubmitFileResponse {

    public $outJobId; // string

}

class ReplaceFile {

    public $inEntry; // ReplaceEntry
    public $inSubmitData; // base64Binary
    public $jobInfo; // PushJobStatus

}

class ReplaceFileResponse {

    public $isReplaced; // int

}

class DownloadFile {

    public $flowId; // string
    public $checkPointId; // string
    public $jobId; // string

}

class DownloadFileResponse {

    public $inSubmitData; // base64Binary

}

class GetFlowList {
    
}

class GetFlowListResponse {

    public $flowList; // string

}

class GetFlowName {

    public $flowId; // string

}

class GetFlowNameResponse {

    public $flowName; // string

}

class GetFlowState {

    public $flowId; // string

}

class GetFlowStateResponse {

    public $FlowState; // int

}

class GetSubmitPoints {

    public $flowId; // string

}

class GetSubmitPointsResponse {

    public $submitPoints; // string

}

class GetCheckPoints {

    public $flowId; // string

}

class GetCheckPointsResponse {

    public $checkPoints; // string

}

class GetSubmitPointName {

    public $flowId; // string
    public $submitPointId; // string

}

class GetSubmitPointNameResponse {

    public $submitPointData; // SubmitPointData

}

class GetCheckPointName {

    public $flowId; // string
    public $checkPointId; // string

}

class GetCheckPointNameResponse {

    public $checkPointName; // string

}

class GetCheckpointJobsCount {

    public $flowId; // string
    public $checkPointId; // string

}

class GetCheckpointJobsCountResponse {

    public $jobs; // int

}

class GetCheckpointJobs {

    public $flowId; // string
    public $checkPointId; // string

}

class GetCheckpointJobsResponse {

    public $jobIds; // string

}

class GetCheckpointJobInfo {

    public $flowId; // string
    public $checkPointId; // string
    public $jobId; // string

}

class GetCheckpointJobInfoResponse {

    public $jobInfo; // JobStatus

}

class GetCheckpointJobsInfo {

    public $flowId; // string
    public $checkPointId; // string

}

class GetCheckpointJobsInfoResponse {

    public $jobInfos; // JobIdStatus

}

class PushCheckpointJob {

    public $flowId; // string
    public $checkPointId; // string
    public $jobId; // string
    public $jobInfo; // PushJobStatus

}

class PushCheckpointJobResponse {

    public $param5; // int

}

class GetLogData {

    public $lastTime; // string

}

class GetLogDataResponse {

    public $logs; // LoggedRecord

}

class GetProgressData {

    public $lastHours; // int

}

class GetProgressDataResponse {

    public $logs; // ProgressRecord

}

class GetJobLockStatus {

    public $flowId; // string
    public $checkPointId; // string
    public $jobId; // string

}

class GetJobLockStatusResponse {

    public $userName; // string

}

class SetJobLockStatus {

    public $flowId; // string
    public $checkPointId; // string
    public $jobId; // string
    public $lockStatus; // int

}

class SetJobLockStatusResponse {

    public $isSet; // int

}

class GetUserJobs {

    public $hours; // int
    public $flags; // int

}

class GetUserJobsResponse {

    public $userJobs; // UserJob

}

class GetJobsHeavyInfo {

    public $jobsId; // HeavyInfoID

}

class GetJobsHeavyInfoResponse {

    public $jobsInfo; // HeavyInfo

}

class GetJobsAdditionalInfo {

    public $jobsId; // AdditionalInfoID

}

class GetJobsAdditionalInfoResponse {

    public $jobsInfo; // AdditionalInfo

}

class GetJobsMetadataInfo {

    public $jobsId; // MetadataInfoID

}

class GetJobsMetadataInfoResponse {

    public $jobsInfo; // MetadataInfo

}

/**
 * Service class
 * 
 * gSOAP 2.7.12 generated service definition 
 * 
 * @author    {author}
 * @copyright {copyright}
 * @package   {package}
 */
class Service extends \SoapClient {

    private static $classmap = array(
        'anonymous0' => 'anonymous0',
        'arrayCoordinate' => 'arrayCoordinate',
        'Array' => 'WSArray',
        'Struct' => 'Struct',
        'base64' => 'base64',
        'duration' => 'duration',
        'dateTime' => 'dateTime',
        'NOTATION' => 'NOTATION',
        'time' => 'time',
        'date' => 'date',
        'gYearMonth' => 'gYearMonth',
        'gYear' => 'gYear',
        'gMonthDay' => 'gMonthDay',
        'gDay' => 'gDay',
        'gMonth' => 'gMonth',
        'boolean' => 'boolean',
        'base64Binary' => 'base64Binary',
        'hexBinary' => 'hexBinary',
        'float' => 'float',
        'double' => 'double',
        'anyURI' => 'anyURI',
        'QName' => 'QName',
        'string' => 'string',
        'normalizedString' => 'normalizedString',
        'token' => 'token',
        'language' => 'language',
        'Name' => 'Name',
        'NMTOKEN' => 'NMTOKEN',
        'NCName' => 'NCName',
        'NMTOKENS' => 'NMTOKENS',
        'ID' => 'ID',
        'IDREF' => 'IDREF',
        'ENTITY' => 'ENTITY',
        'IDREFS' => 'IDREFS',
        'ENTITIES' => 'ENTITIES',
        'decimal' => 'decimal',
        'integer' => 'integer',
        'nonPositiveInteger' => 'nonPositiveInteger',
        'negativeInteger' => 'negativeInteger',
        'long' => 'long',
        'int' => 'int',
        'short' => 'short',
        'byte' => 'byte',
        'nonNegativeInteger' => 'nonNegativeInteger',
        'unsignedLong' => 'unsignedLong',
        'unsignedInt' => 'unsignedInt',
        'unsignedShort' => 'unsignedShort',
        'unsignedByte' => 'unsignedByte',
        'positiveInteger' => 'positiveInteger',
        'Status' => 'Status',
        'EntryPoint' => 'EntryPoint',
        'Selection' => 'Selection',
        'UserSelection' => 'UserSelection',
        'SubmitEntry' => 'SubmitEntry',
        'ReplaceEntry' => 'ReplaceEntry',
        'ConnectionState' => 'ConnectionState',
        'MetadataToFillClass' => 'MetadataToFillClass',
        'MetadataToDisplayClass' => 'MetadataToDisplayClass',
        'JobStatus' => 'JobStatus',
        'JobIdStatus' => 'JobIdStatus',
        'PushJobStatus' => 'PushJobStatus',
        'SubmitPointData' => 'SubmitPointData',
        'LoggedRecord' => 'LoggedRecord',
        'ProgressRecord' => 'ProgressRecord',
        'ConnectionInfo' => 'ConnectionInfo',
        'UserJob' => 'UserJob',
        'HeavyInfoID' => 'HeavyInfoID',
        'HeavyInfo' => 'HeavyInfo',
        'AdditionalInfoID' => 'AdditionalInfoID',
        'AdditionalInfo' => 'AdditionalInfo',
        'MetadataInfoID' => 'MetadataInfoID',
        'MetadataInfo' => 'MetadataInfo',
        'CheckConnect' => 'CheckConnect',
        'CheckConnectResponse' => 'CheckConnectResponse',
        'GetCompressClientJobs' => 'GetCompressClientJobs',
        'GetCompressClientJobsResponse' => 'GetCompressClientJobsResponse',
        'CheckUserNameAndPass' => 'CheckUserNameAndPass',
        'CheckUserNameAndPassResponse' => 'CheckUserNameAndPassResponse',
        'CloseConnection' => 'CloseConnection',
        'CloseConnectionResponse' => 'CloseConnectionResponse',
        'GetStatus' => 'GetStatus',
        'GetStatusResponse' => 'GetStatusResponse',
        'SubmitFile' => 'SubmitFile',
        'SubmitFileResponse' => 'SubmitFileResponse',
        'ReplaceFile' => 'ReplaceFile',
        'ReplaceFileResponse' => 'ReplaceFileResponse',
        'DownloadFile' => 'DownloadFile',
        'DownloadFileResponse' => 'DownloadFileResponse',
        'GetFlowList' => 'GetFlowList',
        'GetFlowListResponse' => 'GetFlowListResponse',
        'GetFlowName' => 'GetFlowName',
        'GetFlowNameResponse' => 'GetFlowNameResponse',
        'GetFlowState' => 'GetFlowState',
        'GetFlowStateResponse' => 'GetFlowStateResponse',
        'GetSubmitPoints' => 'GetSubmitPoints',
        'GetSubmitPointsResponse' => 'GetSubmitPointsResponse',
        'GetCheckPoints' => 'GetCheckPoints',
        'GetCheckPointsResponse' => 'GetCheckPointsResponse',
        'GetSubmitPointName' => 'GetSubmitPointName',
        'GetSubmitPointNameResponse' => 'GetSubmitPointNameResponse',
        'GetCheckPointName' => 'GetCheckPointName',
        'GetCheckPointNameResponse' => 'GetCheckPointNameResponse',
        'GetCheckpointJobsCount' => 'GetCheckpointJobsCount',
        'GetCheckpointJobsCountResponse' => 'GetCheckpointJobsCountResponse',
        'GetCheckpointJobs' => 'GetCheckpointJobs',
        'GetCheckpointJobsResponse' => 'GetCheckpointJobsResponse',
        'GetCheckpointJobInfo' => 'GetCheckpointJobInfo',
        'GetCheckpointJobInfoResponse' => 'GetCheckpointJobInfoResponse',
        'GetCheckpointJobsInfo' => 'GetCheckpointJobsInfo',
        'GetCheckpointJobsInfoResponse' => 'GetCheckpointJobsInfoResponse',
        'PushCheckpointJob' => 'PushCheckpointJob',
        'PushCheckpointJobResponse' => 'PushCheckpointJobResponse',
        'GetLogData' => 'GetLogData',
        'GetLogDataResponse' => 'GetLogDataResponse',
        'GetProgressData' => 'GetProgressData',
        'GetProgressDataResponse' => 'GetProgressDataResponse',
        'GetJobLockStatus' => 'GetJobLockStatus',
        'GetJobLockStatusResponse' => 'GetJobLockStatusResponse',
        'SetJobLockStatus' => 'SetJobLockStatus',
        'SetJobLockStatusResponse' => 'SetJobLockStatusResponse',
        'GetUserJobs' => 'GetUserJobs',
        'GetUserJobsResponse' => 'GetUserJobsResponse',
        'GetJobsHeavyInfo' => 'GetJobsHeavyInfo',
        'GetJobsHeavyInfoResponse' => 'GetJobsHeavyInfoResponse',
        'GetJobsAdditionalInfo' => 'GetJobsAdditionalInfo',
        'GetJobsAdditionalInfoResponse' => 'GetJobsAdditionalInfoResponse',
        'GetJobsMetadataInfo' => 'GetJobsMetadataInfo',
        'GetJobsMetadataInfoResponse' => 'GetJobsMetadataInfoResponse'
    );
    /**
     * Standard array of parameters.
     * @var array
     */
    private static $STD_PARAM = array('uri' => 'http://tempuri.org/butterfly.xsd/Service.wsdl', 'soapaction' => '');

    /**
     * Constructs the service object with login and client password.
     * @param type $login client login
     * @param type $password client password
     */
    public function __construct($login, $password, $IPandPort) {
		
        $wsdlLocation = \dirname(__FILE__) . '/butterfly.v3.2.wsdl';	
	
		
        $this->_swServiceLocation = $IPandPort;

        $options = array(
            //'cache_wsdl' => \WSDL_CACHE_NONE,
            'login' => SoapHelper::createUserPartBasicAuthHeader($login),
            'password' => $password,
            'authentication' => \SOAP_AUTHENTICATION_BASIC,
            'exceptions' => true,
            //'encoding' => 'utf-8',
            'soap_version' => \SOAP_1_1,
            'location' => $this->_swServiceLocation //,
                //'local_cert' => "/home/www/html/WebClient/lib/cacert.pem",
                //'local_pk' => "/home/www/html/WebClient/lib/cakey.pem",
                //'passphrase' => "password",
                //'trace' => 1 // turn it off on production
        );

        $this->_swAuthLogin = $login;
        $this->_swAuthPassword = $password;

        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = '\\switchclient\\' . $value;
            }
        }
        parent::__construct($wsdlLocation, $options);
    }

    /**
     * Service definition of function butterfly__CheckConnect 
     *
     * @param CheckConnect $parameters
     * @return CheckConnectResponse
     */
    public function CheckConnect(CheckConnect $parameters) {
        return $this->__soapCall('CheckConnect', array($parameters), self::$STD_PARAM);
    }

    /**
     * Checks if compression is needed.
     */
    public function needToCompress() {
        $r = $this->GetCompressClientJobs(new GetCompressClientJobs());

        $property = 'param-2';

        if (\array_key_exists($property, $asArray)) {
            return $asArray[$property] == '1';
        }
        return false;
    }

    /**
     * Service definition of function butterfly__GetCompressClientJobs 
     *
     * @param GetCompressClientJobs $parameters
     * @return GetCompressClientJobsResponse
     */
    public function GetCompressClientJobs(GetCompressClientJobs $parameters) {
        return $this->__soapCall('GetCompressClientJobs', array($parameters), self::$STD_PARAM);
    }

    /**
     * Service definition of function butterfly__CheckUserNameAndPass 
     *
     * @param CheckUserNameAndPass $parameters
     * @return CheckUserNameAndPassResponse
     */
    public function CheckUserNameAndPass(CheckUserNameAndPass $parameters) {
        return $this->__soapCall('CheckUserNameAndPass', array($parameters), self::$STD_PARAM);
    }

    /**
     * Service definition of function butterfly__CloseConnection 
     *
     * @param CloseConnection $parameters
     * @return CloseConnectionResponse
     */
    public function CloseConnection(CloseConnection $parameters) {
        return $this->__soapCall('CloseConnection', array($parameters), self::$STD_PARAM);
    }

    /**
     * Closes connection silently.
     */
    public function close() {
        try {
            $this->CloseConnection(new CloseConnection());
        } catch (\SoapFault $e) {
            
        } catch (\Exception $e) {
            
        }
    }

    /**
     * Returns true if given credentials are valid.
     * @return valid credentials or not.
     */
    public function isValidCredentials() {
        $result = $this->GetStatus(new GetStatus());
     	
        return $result != null && 'Connected' == $result->res->mStatus;
    }

    /**
     * Returns role for given credentials (if they are valid). Checks by the following enum:
     *   urOperator = 0,
     *   urJobManager = 1,
     *   urAdministrator = 2,
     *   urCustomer = 3
     *
     * @return true/false (admin credentials role)?
     */
    public function isAdminCredentials() {
        $p = new CheckUserNameAndPass();
        $r = $this->CheckUserNameAndPass($p);

        $asArray = (array) $r;

        $property = 'param-3';

        if (\array_key_exists($property, $asArray)) {
            return $asArray[$property] == '2';
        }
        return false;
    }

    /**
     * Service definition of function butterfly__GetStatus 
     *
     * @param GetStatus $parameters
     * @return GetStatusResponse
     */
    public function GetStatus(GetStatus $parameters) {
        return $this->__soapCall('GetStatus', array($parameters), self::$STD_PARAM);
    }

    /**
     * Service definition of function butterfly__SubmitFile10 
     *
     * @param SubmitFile $parameters
     * @return SubmitFileResponse
     */
    public function SubmitFile10(SubmitFile $parameters) {
        return $this->__soapCall('SubmitFile10', array($parameters), self::$STD_PARAM);
    }

    /**
     * Service definition of function butterfly__ReplaceFile 
     *
     * @param ReplaceFile $parameters
     * @return ReplaceFileResponse
     */
    public function ReplaceFile(ReplaceFile $parameters) {
        return $this->__soapCall('ReplaceFile', array($parameters), self::$STD_PARAM);
    }

    /**
     * Service definition of function butterfly__DownloadFile 
     *
     * @param DownloadFile $parameters
     * @return DownloadFileResponse
     */
    public function DownloadFile(DownloadFile $parameters) {
        return $this->__soapCall('DownloadFile', array($parameters), self::$STD_PARAM);
    }

    /**
     * Service definition of function butterfly__GetFlowList 
     *
     * @param GetFlowList $parameters
     * @return GetFlowListResponse
     */
    public function GetFlowList(GetFlowList $parameters) {
        return $this->__soapCall('GetFlowList', array($parameters), self::$STD_PARAM);
    }

    /**
     * Service definition of function butterfly__GetFlowName 
     *
     * @param GetFlowName $parameters
     * @return GetFlowNameResponse
     */
    public function GetFlowName(GetFlowName $parameters) {
        return $this->__soapCall('GetFlowName', array($parameters), self::$STD_PARAM);
    }

    /**
     * Service definition of function butterfly__GetFlowState 
     *
     * @param GetFlowState $parameters
     * @return GetFlowStateResponse
     */
    public function GetFlowState(GetFlowState $parameters) {
        return $this->__soapCall('GetFlowState', array($parameters), self::$STD_PARAM);
    }

    /**
     * Service definition of function butterfly__GetSubmitPoints 
     *
     * @param GetSubmitPoints $parameters
     * @return GetSubmitPointsResponse
     */
    public function GetSubmitPoints(GetSubmitPoints $parameters) {
        return $this->__soapCall('GetSubmitPoints', array($parameters), self::$STD_PARAM);
    }

    /**
     * Service definition of function butterfly__GetCheckPoints 
     *
     * @param GetCheckPoints $parameters
     * @return GetCheckPointsResponse
     */
    public function GetCheckPoints(GetCheckPoints $parameters) {
        return $this->__soapCall('GetCheckPoints', array($parameters), self::$STD_PARAM);
    }

    /**
     * Service definition of function butterfly__GetSubmitPointName 
     *
     * @param GetSubmitPointName $parameters
     * @return GetSubmitPointNameResponse
     */
    public function GetSubmitPointName(GetSubmitPointName $parameters) {
        return $this->__soapCall('GetSubmitPointName', array($parameters), self::$STD_PARAM);
    }

    /**
     * Service definition of function butterfly__GetCheckPointName 
     *
     * @param GetCheckPointName $parameters
     * @return GetCheckPointNameResponse
     */
    public function GetCheckPointName(GetCheckPointName $parameters) {
        return $this->__soapCall('GetCheckPointName', array($parameters), self::$STD_PARAM);
    }

    /**
     * Service definition of function butterfly__GetCheckpointJobsCount 
     *
     * @param GetCheckpointJobsCount $parameters
     * @return GetCheckpointJobsCountResponse
     */
    public function GetCheckpointJobsCount(GetCheckpointJobsCount $parameters) {
        return $this->__soapCall('GetCheckpointJobsCount', array($parameters), self::$STD_PARAM);
    }

    /**
     * Service definition of function butterfly__GetCheckpointJobs10 
     *
     * @param GetCheckpointJobs $parameters
     * @return GetCheckpointJobsResponse
     */
    public function GetCheckpointJobs10(GetCheckpointJobs $parameters) {
        return $this->__soapCall('GetCheckpointJobs10', array($parameters), self::$STD_PARAM);
    }

    /**
     * Service definition of function butterfly__GetCheckpointJobInfo 
     *
     * @param GetCheckpointJobInfo $parameters
     * @return GetCheckpointJobInfoResponse
     */
    public function GetCheckpointJobInfo(GetCheckpointJobInfo $parameters) {
        return $this->__soapCall('GetCheckpointJobInfo', array($parameters), self::$STD_PARAM);
    }

    /**
     * Service definition of function butterfly__GetCheckpointJobsInfo 
     *
     * @param GetCheckpointJobsInfo $parameters
     * @return GetCheckpointJobsInfoResponse
     */
    public function GetCheckpointJobsInfo(GetCheckpointJobsInfo $parameters) {
        return $this->__soapCall('GetCheckpointJobsInfo', array($parameters), self::$STD_PARAM);
    }

    /**
     * Service definition of function butterfly__PushCheckpointJob 
     *
     * @param PushCheckpointJob $parameters
     * @return PushCheckpointJobResponse
     */
    public function PushCheckpointJob(PushCheckpointJob $parameters) {
        return $this->__soapCall('PushCheckpointJob', array($parameters), self::$STD_PARAM);
    }

    /**
     * Service definition of function butterfly__GetLogData10 
     *
     * @param GetLogData $parameters
     * @return GetLogDataResponse
     */
    public function GetLogData10(GetLogData $parameters) {
        return $this->__soapCall('GetLogData10', array($parameters), self::$STD_PARAM);
    }

    /**
     * Returns array of flow identifiers.
     * @return array of flow identifiers
     */
    public function getFlowIdentifiers() {
        $parameters = new GetFlowList();
        $flowList = $this->GetFlowList($parameters);
        if ($flowList->flowList == null) {
            return array();
        }
        if (!is_array($flowList->flowList)) {
            return array($flowList->flowList);
        }
        return $flowList->flowList;
    }

    /**
     * All jobs at checkpoint.
     * @return array of jobs at a checkpoint points
     */

	 public function getJobsFromCheckPoint($flowid,$chid){
	 $parameters = new \switchclient\GetCheckpointJobsInfo();
	 $parameters->flowId = $flowid;
	 $parameters->checkPointId = $chid;
	  $r = $this->GetCheckpointJobsInfo($parameters);
	 return $r;
	 }
	 

    /**
     * Allcheckpoint.
     * @return array of checkpoints
     */

	 
	 public function getAllCheckPoints() {
 			$flowIds = $this->getFlowIdentifiers();
	        $result = array();
		        foreach ($flowIds as $flowId) {
		            $parameters = new \switchclient\GetCheckPoints();
        	    $parameters->flowId = $flowId;
				$newCp = new \stdClass();
				$newCp->flowid =$flowId;			
	            $r = $this->GetCheckPoints($parameters);
					if (empty($r->checkPoints)) {
						$r->checkPoints = array();
					}
			
					if (!\is_array($r->checkPoints)) {
						$r->checkPoints = array($r->checkPoints);
				}
			$points =array();
			foreach ($r->checkPoints as $chpId) {		
				$chkParameters = new \switchclient\GetCheckPointName();
				$countparameters=new \switchclient\GetCheckpointJobsCount();
			   	$countparameters->flowId=$flowId ;// string
    			$countparameters->checkPointId=$chpId; // string
				$chkParameters->flowId=$flowId ;// string
    			$chkParameters->checkPointId=$chpId; // string
				$retCount=$this->GetCheckpointJobsCount($countparameters);
				$numberOfJobs=$retCount->jobs;
				$ret=$this->GetCheckPointName($chkParameters);
				$newCpdet = new \stdClass();
				$newCpdet->chkID =$chpId;
				$newCpdet->chName=$ret->checkPointName;
				$newCpdet->chJobCount=$numberOfJobs;
				$points[]=$newCpdet;
				$newCp->ckpoints=$points;	
			}						 
			$result[]=$newCp;			
		}
		return $result;
			exit;			
    }
    /**
     * AllSubmitpoints.
     * @return array of checkpoints
     */

    public function getAllSubmitPoints() {

        $flowIds = $this->getFlowIdentifiers();
        $result = array();
        foreach ($flowIds as $flowId) {
            $parameters = new \switchclient\GetSubmitPoints();
            $parameters->flowId = $flowId;
            $r = $this->GetSubmitPoints($parameters);
						
			if (empty($r->submitPoints)) {
				$r->submitPoints = array();
			}
			
			if (!\is_array($r->submitPoints)) {
				$r->submitPoints = array($r->submitPoints);
	
			}

			foreach($r->submitPoints as $iterationSpId) {


	            $p = new GetSubmitPointName();
    	        $p->flowId = $flowId;
        	    $p->submitPointId = $iterationSpId;

				$newSp = new \stdClass();
	            $newSp->flowId = $flowId;
    	        $newSp->spId = $iterationSpId;

           		$sp = $this->GetSubmitPointName($p);
				
            	$newSp->spData = $sp->submitPointData;
				
            	if (\is_array($newSp->spData)) {
            		if (\sizeof($newSp->spData) > 1) {
            			throw new \Exception('More than 1 submit point data in one GetSubmitPointName?');
            		}
            		$newSp->spData = $newSp->spData[0];
            	}
            
            	$result[] = $newSp;
				
            }
			
        }
	

        foreach ($result as $point) {
            if (isSet($point->spData->metadata) && $point->spData->metadata instanceof MetadataToFillClass) {
                $point->spData->metadata = array($point->spData->metadata);
            }

            if (!isSet($point->spData->metadata) || !is_array($point->spData->metadata)) {
            	$point->spData->metadata = array();
            }

            // process thumbnails
            if (!empty($point->spData->displayThumbnailBase64)) {
                $file = $this->getSubmitPointThumbnailFilePath($point->spId);
                $fileName = \basename($file);
                if (!$this->submitPointThumbnailExists($point->spId)) {
                    $this->decodeBase64Thumbnail($point->spData->displayThumbnailBase64, $fileName);
                }
                $point->_thumbnaileAbsolutePath = $file;
                $point->_thumbnaileRelativePath =
                        'include/public/' . self::$THUMBNAILS_RELATIVE_DIRECTORY
                        . '/' . $fileName;
            }
        }

        return $result;
    }

    /**
     * Relative path to thumbnails.
     * @var string relative path to thumbnails.
     */
    public static $THUMBNAILS_RELATIVE_DIRECTORY = 'thumbnails';
    /**
     * Thumbnails path.
     * @var string
     */
    private static $THUMBNAIL_PATH = null;

    /**
     * Returns array of user jobs with heavy info objects.
     * @param $hours number of hours before now
     * @return array of user jobs
     */
    public function getUserJobsWithHeavyInfo($hours = 0) {

        $parameters = new GetUserJobs();
        $parameters->hours = $hours;
        $result = $this->GetUserJobs($parameters);
        $jobs = array();

        if (is_array($result->userJobs)) {
            for ($i = 0, $len = sizeof($result->userJobs); $i < $len; $i++) {
                $job = $result->userJobs[$i];
                $jobs [] = $job;
                $this->processJobThumbnail($job);
            }
        } else if ($result->userJobs instanceof UserJob) {
            $jobs [] = $result->userJobs;
            $this->processJobThumbnail($result->userJobs);
        }

        return $jobs;
    }

    /**
     * Returns UserJob by given id. 
     * Very heavy operation: use only when job needs to be fresh (after operations).
     * @param string $jobId job identifier
     * @return UserJob job or null
     */
    public function getUserJobWithHeavyInfo($jobId) {
        if (empty($jobId)) {
            return null;
        }
        $jobs = $this->getUserJobsWithHeavyInfo();
        foreach ($jobs as $job) {
            if ($job->prefix == $jobId) {
                return $job;
            }
        }
        return null;
    }

    /**
     * Creates if not previouslye created thumbnails directory.
     * @return string path to thumbnail directory
     */
    protected function createThumbnailPathIfNotCreatedAndGet() {
        if (self::$THUMBNAIL_PATH == null) {
            $thumbnailsPath = \dirname(__FILE__) . '/../public/' . self::$THUMBNAILS_RELATIVE_DIRECTORY;
            if (!\is_dir($thumbnailsPath)) {
                \mkdir($thumbnailsPath, 0777, true);
            }
            self::$THUMBNAIL_PATH = \realpath($thumbnailsPath);
        }
        return self::$THUMBNAIL_PATH;
    }

    /**
     * Returns GetJobsHeavyInfoResponse by given job id.
     * @param string $jobId job identifier
     * @return GetJobsHeavyInfoResponse 
     */
    public function getHeavyInfo($jobId) {
        if (empty($jobId)) {
            return null;
        }

        $heavyId = new HeavyInfoID();
        $heavyId->jobId = $jobId;
        $heavyId->retrieveThumbnail = true;

        $hip = new GetJobsHeavyInfo();
        $hip->jobsId = $heavyId;
        $x = $this->GetJobsHeavyInfo($hip);
        return $x;
    }

    /**
     * Decodes and stores thumbnail into local directory.
     * Marks UserJob with 2 new properties: _thumbnaileAbsolutePath and _thumbnaileRelativePath.
     * @param UserJob $job to process
     */
    protected function processJobThumbnail(UserJob $job) {
        if (!$this->jobThumbnailExists($job->prefix)) {
            $heavyInfo = $this->getHeavyInfo($job->prefix);
            if ($heavyInfo != null) {
                $this->decodeBase64FromHeavyInfo($heavyInfo->jobsInfo);
            }
        }

        if ($this->jobThumbnailExists($job->prefix)) {
            $thumbnail = $this->getJobThumbnailFilePath($job->prefix);
            $job->_thumbnaileAbsolutePath = $thumbnail;
            $job->_thumbnaileRelativePath = 'public/' . self::$THUMBNAILS_RELATIVE_DIRECTORY
                    . '/' . \basename($thumbnail);
        }
    }

    /**
     * Returns detailed job info by job identifier
     * @param string $jobId job identifier
     * @return \stdClass detailed job object
     */
    public function getJobDetailed($jobId) {
        if (empty($jobId)) {
            return null;
        }

        $result = new \stdClass();
        $r = $this->getHeavyInfo($jobId);
        if (empty($r)) {
            return null;
        }

        $p = new GetJobsMetadataInfo();
        $p->jobsId = new MetadataInfoID();
        $p->jobsId->jobId = $jobId;
        $x = $this->GetJobsMetadataInfo($p); // nothing here
        $r->jobsInfo->metadataInfo = $x;
        return $r->jobsInfo;
    }
	
	    public function getJobDetailedplus($jobId) {
        if (empty($jobId)) {
            return null;
        }

        $result = new \stdClass();
        $r = $this->getHeavyInfo($jobId);
        if (empty($r)) {
            return null;
        }

        $p = new GetJobsMetadataInfo();
        $p->jobsId = new MetadataInfoID();
        $p->jobsId->jobId = $jobId;
        $x = $this->GetJobsMetadataInfo($p); // nothing here
        $r->jobsInfo->metadataInfo = $x;
		$this->decodeBase64FromHeavyInfo($r->jobsInfo);
        return $r->jobsInfo;
    }


    /**
     * Pushes the job towards one or several connections.
     * @param string $connectionId connection id
     * @param string $jobId job id
     * @param string $flowId flow id
     * @param string $checkpointId check point id
     * @return PushCheckpointJobResponse 
     */
    public function pushJobToConnection($connectionId, $job,$metas) {
		
        if (!is_object($job)) {
            throw new Exception('Job can\'t be empty');
        }
		
		$countThis = count($job->fillMetadata);
		
		if($countThis=='0')
		{
		}
		else if($countThis=='1')
		{
			$job->fillMetadata->mtfValue=$metas[0];
			
		}
		else{
		
	
		
		foreach ($job->fillMetadata as $key => $value){
			$job->fillMetadata[$key]->mtfValue=$metas[$key];
		}
		}
		
		$jobName = $job->name;
        $p = new PushCheckpointJob();
        $p->checkPointId = $job->pointId;
        $p->jobId = $job->prefix;
        $p->flowId = $job->flowId;
        $p->jobInfo = new PushJobStatus();
        $p->jobInfo->connectionIds = $connectionId;
        $p->jobInfo->jobName = null; // hope this does not override the name
		
		$p->jobInfo->jobRequiredMetadata = new MetadataToFillClass();
		$p->jobInfo->jobRequiredMetadata = $job->fillMetadata;
	
		
      return $this->PushCheckpointJob($p);
    }

    /**
     * Downloads job.
     * @param stdClass $job job instance
     * @return DownloadFileResponse
     */
    public function download($job) {
        #$p = new DownloadFile();
        #$p->checkPointId = $job->pointId;
        #$p->jobId = $job->prefix;
        #$p->flowId = $job->flowId;
        #$p->downloadType = 0;
        #return $this->DownloadFile($p);
        // custom curl request
        $soapBody = SOAPHelper::generateSOAPRequestForFileDownload($job->prefix, $job->flowId, $job->pointId);
        $headers = array(
            'Content-Type: text/xml; charset=utf-8',
            'SOAPAction: ""',
            'Content-Length: ' . \strlen($soapBody)
        );

        if (!empty($this->_swAuthLogin)) {
            $headers[] = SOAPHelper::createBasicAuthHeader($this->_swAuthLogin, $this->_swAuthPassword);
        }

        $request = new POSTCURLRequest($this->_swServiceLocation, $soapBody, $headers);
        $dimeResponse = $request->execute();
        $r = new DimeSoapResponseParser($dimeResponse);
        $tempFileToCreate = \realpath(\dirname(__FILE__) . '/../public') . '/' . $job->prefix . '-' . md5($job->prefix . ':' . $job->flowId) . '-' . time() . '.tmp';
        foreach ($r->getRecords() as $record) {
            if ($record->last == 1) {
                \file_put_contents($tempFileToCreate, $record->data);
                return $tempFileToCreate;
            }
        }
        $logger = Logger::getLogger();
        $logger->error('Unable to parse response for download file for: '
                . $job->prefix . ':' . $job->flowId . ':' . $job->pointId);
        $logger->error(\print_r($r, true));
        return null;
    }

    /**
     * Submits file to submit point.
     * @param string $flowId flow id
     * @param string $submitPointId submit point
     * @param string $filePath path to file
     * @param string $name job name
     * @param array  $metadatas metadata array (name => value map)
     */
    public function submit($flowId, $submitPointId, $filePath, $name, $metadatas = array()) {
       	
		if (!\file_exists($filePath) || \filesize($filePath) <= 0) {
            throw new \Exception('File not found: ' . $filePath);
        }

        $thumbPath = self::createThumbnailPathIfNotCreatedAndGet();
        $uploadedFile = $thumbPath . '/' . $name;
        \copy($filePath, $uploadedFile);

        $genZip = $uploadedFile . '.zip';
        ZIP::create(array($uploadedFile), $genZip);
        $genZipcontents = \file_get_contents($genZip);
        \unlink($genZip);

        $dimeID = \mt_rand(100, 999) . 'F601021A55B617B803703EF19F' . \mt_rand(100, 999);
        // name and file name in $uploadedFile must match!!!
        $genSOAPXml = SOAPHelper::generateSOAPRequestForFileSubmit($uploadedFile, $name, $flowId, $submitPointId, $dimeID, $metadatas);

        $dime = new DimeSOAPRequestWithAttachment($this->_swServiceLocation,
                        $genSOAPXml, $genZipcontents, 'uuid:' . UUID::get(),
                        $dimeID,
                        $this->_swAuthLogin, $this->_swAuthPassword);


        $dime->setDebug(true);
       $dime->execute();
        if (\file_exists($uploadedFile)) {
            \unlink($uploadedFile);
        }
        return 1;
    }

    /**
     * Checks if thumbnail exists for given submit point id.
     * @param string $spId to check
     * @return true/false.
     */
    protected function submitPointThumbnailExists($spId) {
        $fileName = $this->getSubmitPointThumbnailFilePath($spId);
        return \file_exists($fileName);
    }

    /**
     * Checks if thumbnail exists for given job id.
     * @param string $jobId to check
     * @return true/false.
     */
    protected function jobThumbnailExists($jobId) {
        $fileName = $this->getJobThumbnailFilePath($jobId);
        return \file_exists($fileName);
    }

    /**
     * Returns path to thumbnail.
     * @param string $jobId hob id
     * @return thumbnail
     */
    protected function getJobThumbnailFilePath($jobId) {
        $thumbnailsPath = $this->createThumbnailPathIfNotCreatedAndGet();
        return $thumbnailsPath . '/job_' . $jobId . '.jpg';
    }

    /**
     * Returns path to thumbnail.
     * @param string $spId submit point id
     * @return thumbnail to submit point
     */
    protected function getSubmitPointThumbnailFilePath($spId) {
        $thumbnailsPath = $this->createThumbnailPathIfNotCreatedAndGet();
        return $thumbnailsPath . '/sp_' . $spId . '.jpg';
    }

    /**
     * Decodes info from base64 object to thumbnail in file system.
     * @param string $object thumbnail base64 encoded info
     * @param string $fileName to store (not path)
     */
    protected function decodeBase64Thumbnail($base64Data, $fileName) {
        if ($base64Data == null || empty($base64Data)) {
            return;
        }
        $thumbnailsPath = $this->createThumbnailPathIfNotCreatedAndGet();
        $data = \base64_decode($base64Data);
        \file_put_contents($thumbnailsPath . '/' . $fileName, $data);
    }

    /**
     * Decodes info from HeabyInfo object to thumbnail in file system.
     * @param HeavyInfo $object heavy info object
     */
    protected function decodeBase64FromHeavyInfo(HeavyInfo $object) {
        if ($object->thumbnailBase64 == null || trim($object->thumbnailBase64) == '') {
            return;
        }
        $fileName = $this->getJobThumbnailFilePath($object->jobId);
        $this->decodeBase64Thumbnail($object->thumbnailBase64, \basename($fileName));
    }

    /**
     * Returns log messages.
     * @return log messages
     */
    public function getLogMessages() {
        $ld = new GetLogData();
        $ld->lastTime = gmdate('d.m.Y H:i:s.000', time() - 3600 * 5);
        $result = $this->GetLogData10($ld);

        if (is_object($result) && isSet($result->logs)) {
            if (is_array($result->logs)) {
                $result = $result->logs;
            } else if ($result->logs instanceof LoggedRecord) {
                $result = array($result->logs);
            }
        }


        foreach ($result as $record) {
            $record->parsedMessage = new \stdClass();
            $record->parsedMessage->operation = $record->message;

            if (!isSet($record->parsedMessage->operation)) {
                $record->parsedMessage->operation = '[EMPTY MESSAGE]';
            }
        }

        return $result;
    }

    /**
     * Service definition of function butterfly__GetProgressData 
     *
     * @param GetProgressData $parameters
     * @return GetProgressDataResponse
     */
    public function GetProgressData(GetProgressData $parameters) {
        return $this->__soapCall('GetProgressData', array($parameters), self::$STD_PARAM);
    }

    /**
     * Service definition of function butterfly__GetJobLockStatus 
     *
     * @param GetJobLockStatus $parameters
     * @return GetJobLockStatusResponse
     */
    public function GetJobLockStatus(GetJobLockStatus $parameters) {
        return $this->__soapCall('GetJobLockStatus', array($parameters), self::$STD_PARAM);
    }

    /**
     * Service definition of function butterfly__SetJobLockStatus 
     *
     * @param SetJobLockStatus $parameters
     * @return SetJobLockStatusResponse
     */
    public function SetJobLockStatus(SetJobLockStatus $parameters) {
        return $this->__soapCall('SetJobLockStatus', array($parameters), self::$STD_PARAM);
    }

    /**
     * Service definition of function butterfly__GetUserJobs 
     *
     * @param GetUserJobs $parameters
     * @return GetUserJobsResponse
     */
    public function GetUserJobs(GetUserJobs $parameters) {
        return $this->__soapCall('GetUserJobs', array($parameters), self::$STD_PARAM);
    }

    /**
     * Service definition of function butterfly__GetJobsHeavyInfo 
     *
     * @param GetJobsHeavyInfo $parameters
     * @return GetJobsHeavyInfoResponse
     */
    public function GetJobsHeavyInfo(GetJobsHeavyInfo $parameters) {
        return $this->__soapCall('GetJobsHeavyInfo', array($parameters), self::$STD_PARAM);
    }

    /**
     * Service definition of function butterfly__GetJobsAdditionalInfo 
     *
     * @param GetJobsAdditionalInfo $parameters
     * @return GetJobsAdditionalInfoResponse
     */
    public function GetJobsAdditionalInfo(GetJobsAdditionalInfo $parameters) {
        return $this->__soapCall('GetJobsAdditionalInfo', array($parameters), self::$STD_PARAM);
    }

    /**
     * Service definition of function butterfly__GetJobsMetadataInfo 
     *
     * @param GetJobsMetadataInfo $parameters
     * @return GetJobsMetadataInfoResponse
     */
    public function GetJobsMetadataInfo(GetJobsMetadataInfo $parameters) {
        return $this->__soapCall('GetJobsMetadataInfo', array($parameters), self::$STD_PARAM);
    }

}

/**
 * SOAP helper for creating SOAP bodies of submit/replace/download requests.
 */
class SOAPHelper {

    /**
     * OEM_ID.
     */
    const OEM_ID = 'SwitchClient';
    
    /**
     * Private ctor.
     */
    private function __construct() {
        
    }

    /**
     * Creates basic auth header.
     * @param string $user
     * @param string $password
     * @return string 
     */
    public static function createBasicAuthHeader($user, $password) {
        return 'Authorization: Basic ' . \base64_encode(self::createUserPartBasicAuthHeader($user) . ':' . $password);
    }
    
    /**
     * Creates user part for basic auth header.
     * @param string $user
     * @return string 
     */
    public static function createUserPartBasicAuthHeader($user) {
		return $user . ';' . self::OEM_ID;
    }

    /**
     * Loads content of the pattern and returns it.
     * @param string $name name of the pattern
     * @return string xml
     */
    private static function loadPattern($name) {
        $patternFile = \dirname(__FILE__) . '/soap-patterns/' . $name . '.xml';
        return \file_get_contents($patternFile);
    }
	
	public function CreatePushMetadataString($job,$metas,$jobid,$flowid,$checkpointid,$connectionid,$jobName)
 {
	 	$pattern = self::loadPattern('push-pattern');
        $patternArg = self::loadPattern('submit-pattern-arguments-ref');
        $patternMultiRef = self::loadPattern('submit-pattern-multi-ref');
        $patternBooleans = self::loadPattern('submit-pattern-booleans-ref');
		
		
		$index = 1;
        $arguments = '';
        $multiref = '';
        foreach ($metas as $key => $value) {
            $arguments .= \str_replace('${index}', $index, $patternArg);
            $multiref .= \str_replace(
                    array('${name}', '${value}', '${index}'), array(\htmlentities($key), \htmlentities($value), $index), $patternMultiRef);
            $index++;
        }
		
		
		
	 
	//$multiref .= $patternBooleans;

        $patternVariables = array(         
            '${submit-pattern-arguments-ref}',
            '${submit-pattern-multi-ref}'
        );

        $replacement = array(         
            $arguments,
            $multiref
        );

        return('too');
		
 }

    /**
     * SOAP body for file download.
     * @param string $jobId
     * @param string $flowId
     * @param string $checkPointId
     * @return SOAP body for file download
     */
    public static function generateSOAPRequestForFileDownload($jobId, $flowId, $checkPointId) {
        if (empty($flowId) || empty($jobId)) {
            throw new \Exception('Flow id and job id are required.');
        }

        $pattern = self::loadPattern('download-pattern');
        $patternVariables = array(
            '${flowId}',
            '${checkPointId}',
            '${jobId}'
        );

        $replacement = array(
            \htmlentities($flowId),
            \htmlentities($checkPointId),
            \htmlentities($jobId)
        );

        return \str_replace($patternVariables, $replacement, $pattern);
    }

    /**
     * Creates SOAP requse body for submiting the file.
     * @param string $file path to existing file
     * @param string $name name of the job
     * @param type $flowId flow id
     * @param type $submitPointId point id
     * @param type $internalDimeId dime id to use in SOAP request
     * @param type $clientMetadataValues values metadata
     * @return string SOAP request body for file submit
     */
    public static function generateSOAPRequestForFileSubmit($file, $name, $flowId, $submitPointId, $internalDimeId, $clientMetadataValues = array()) {

        if (empty($flowId) || empty($submitPointId) || empty($internalDimeId)) {
            throw new \Exception('Flow id and submit point id are required.');
        }

        $pattern = self::loadPattern('submit-pattern');
        $patternArg = self::loadPattern('submit-pattern-arguments-ref');
        $patternMultiRef = self::loadPattern('submit-pattern-multi-ref');
        $patternBooleans = self::loadPattern('submit-pattern-booleans-ref');

        $index = 1;
        $arguments = '';
        $multiref = '';
        foreach ($clientMetadataValues as $key => $value) {
            $arguments .= \str_replace('${index}', $index, $patternArg);
            $multiref .= \str_replace(
                    array('${name}', '${value}', '${index}'), array(\htmlentities($key), \htmlentities($value), $index), $patternMultiRef);
            $index++;
        }

        $multiref .= $patternBooleans;

        $patternVariables = array(
            '${flowId}',
            '${submitPointId}',
            '${jobName}',
            '${jobOrigin}',
            '${submitDataId}',
            '${submit-pattern-arguments-ref}',
            '${submit-pattern-multi-ref}'
        );

        $replacement = array(
            \htmlentities($flowId),
            \htmlentities($submitPointId),
            \htmlentities($name),
            \htmlentities($file),
            \htmlentities($internalDimeId),
            $arguments,
            $multiref
        );

        return \str_replace($patternVariables, $replacement, $pattern);
    }

}

/**
 * SOAP request that uses CURL to perform HTTP requests.
 */
class POSTCURLRequest {

    private $url;
    private $postData;
    private $headers;
    private $debug = false;

    /**
     * Construtcts the object.
     * @param string $url url
     * @param string $postData data
     * @param array $headers headers
     */
    public function __construct($url, $postData, $headers = array()) {
        $this->url = $url;
        $this->postData = $postData;
        $this->headers = $headers;
    }

    /**
     * Enables debug information (saves request to file)
     * @param boolean (or similar PHP) $debug 
     */
    public function setDebug($debug) {
        $this->debug = $debug ? true : false;
    }

    /**
     * Executes POST request with given parameters.
     * @return string request result 
     */
    public function execute() {
        $path = \dirname(__FILE__) . '/../public/';
		
        if ($this->debug) {
            \file_put_contents($path . 'soap-request.data', $this->postData);
            $headersAsString = \join("\n", $this->headers);
            \file_put_contents($path . 'soap-request-headers.data', $headersAsString . "\n\n");
        }

        $ch = \curl_init();
        \curl_setopt($ch, \CURLOPT_URL, $this->url);
        \curl_setopt($ch, \CURLOPT_RETURNTRANSFER, 1);
        if ($this->debug) {
            \curl_setopt($ch, \CURLOPT_HEADER, 1);
        }
        \curl_setopt($ch, \CURLOPT_HTTPHEADER, $this->headers);
        \curl_setopt($ch, \CURLOPT_POST, 1);
        \curl_setopt($ch, \CURLOPT_POSTFIELDS, $this->postData);

        if (\preg_match('/^https.*/i', $this->url)) {
            \curl_setopt($ch, \CURLOPT_SSL_VERIFYPEER, false);
        }

        $result = \curl_exec($ch);
        if ($this->debug) {
            \file_put_contents($path . 'soap-response.data', $result);
        }
        return $result;
    }

}

/**
 * Helper class to create ZIP archives.
 */
class ZIP {

    /**
     * Private ctor.
     */
    private function __construct() {
        
    }

    /**
     * Creates a ZIP file from given list of files.
     * @param array $files array of files
     * @param type $destination zip file
     * @param type $overwrite overwrite or not
     * @return boolean created or not
     */
    public static function create($files = array(), $destination = '', $overwrite = true) {
        if (\file_exists($destination) && !$overwrite) {
            return false;
        }
        $valid_files = array();
        if (\is_array($files)) {
            foreach ($files as $file) {
                //make sure the file exists
                if (\file_exists($file)) {
                    $valid_files[] = $file;
                } else {
                    throw new \Exception('File does not exist: ' . $file);
                }
            }
        }
        if (count($valid_files)) {
            $zip = new \ZipArchive();
            if ($zip->open($destination, $overwrite ? \ZIPARCHIVE::OVERWRITE : \ZIPARCHIVE::CREATE) !== true) {
                return false;
            }
            foreach ($valid_files as $file) {
                $zip->addFile($file, \basename($file));
            }
            $zip->close();

            return \file_exists($destination);
        } else {
            return false;
        }
    }

}

/**
 * Helper class to generate UUID version 4.
 */
class UUID {

    /**
     * Private ctor.
     */
    private function __construct() {
        
    }

    /**
     * Generates UUID version 4.
     * @return string
     */
    public static function get() {
        return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
                // 32 bits for "time_low"
                mt_rand(0, 0xffff), mt_rand(0, 0xffff),
                // 16 bits for "time_mid"
                mt_rand(0, 0xffff),
                // 16 bits for "time_hi_and_version",
                // four most significant bits holds version number 4
                mt_rand(0, 0x0fff) | 0x4000,
                // 16 bits, 8 bits for "clk_seq_hi_res",
                // 8 bits for "clk_seq_low",
                // two most significant bits holds zero and one for variant DCE1.1
                mt_rand(0, 0x3fff) | 0x8000,
                // 48 bits for "node"
                mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
        );
    }

}

/**
 * DIME specification.
 * 
 * Field	Description
 * VERSION (5 bit)	Specifies the version of the DIME message
 * MB (1 bit)	Specifies that this record is the first record of the message
 * ME (1 bit)	Specifies that this record is the last record of the message
 * CF (1 bit)	Specifies that the contents of the message have been chunked
 * TYPE_T (4 bit)	Specifies the structure and format of the TYPE field
 * RESERVED (4 bit)	Reserved for future use
 * OPTIONS_LENGTH (16 bit)	Specifies the length (in bytes) of the OPTIONS field, excluding any necessary padding (up to 3 bytes)
 * ID_LENGTH (16 bit)	Specifies the length (in bytes) of the ID field, excluding any necessary padding (up to 3 bytes)
 * TYPE_LENGTH (16 bit)	Specifies the length (in bytes) of the TYPE field, excluding any necessary padding (up to 3 bytes)
 * DATA_LENGTH (32 bit)	Specifies the length (in bytes) of the DATA field, excluding any necessary padding (up to 3 bytes)
 * OPTIONS	Contains any optional information used by a DIME parser
 * ID	Contains a URI for uniquely identifying a DIME payload with any additional padding; the length of this field is specified by ID_LENGTH
 * TYPE	Specifies the encoding for the record based on a type reference URI or a MIME media-type; reference type is specified by TYPE_T, and the length of this field is specified by TYPE_LENGTH
 * DATA	Contains the actual data payload for the record; format of the data depends on the TYPE specified for the record; length of this field is specified by DATA_LENGTH
 */

/**
 * Dime request with attachment.
 */
class DimeSOAPRequestWithAttachment {
	
    /**
     * Soap type.
     */
    const SOAP_TYPE = 'http://schemas.xmlsoap.org/soap/envelope/';
    /**
     * Attachment type.
     */
    const ATTACHMENT_TYPE = 'data/bin';

    // the first byte of DIME header, message begin
    private static $DIME_VERSION_FLAGS_BEGIN_BYTE = 0;
    // the first byte of DIME header, message end
    private static $DIME_VERSION_FLAGS_END_BYTE = 0;
    // the second byte of DIME header: type + reserved
    private static $DIME_TYPE_UNCHANGED_RESERVED = 0;
    // the second byte of DIME header: type + reserved
    private static $DIME_TYPE_MEDIA_RESERVED = 0;
    // the second byte of DIME header: type + reserved
    private static $DIME_TYPE_URI_RESERVED = 0;
    // the second byte of DIME header: type + reserved
    private static $DIME_TYPE_UNKNOWN_RESERVED = 0;
    // the second byte of DIME header: type + reserved
    private static $DIME_TYPE_NONE_RESERVED = 0;
    // the third byte
    private static $DIME_OPT_LENGTH_BYTE1 = 0;
    // the fourth byte
    private static $DIME_OPT_LENGTH_BYTE2 = 0;
    // pad string.
    private static $PAD_STR = "\0";

    /**
     * Initializes the constants for the DIME header.
     */
    public static function init() {
        // version MB ME CF
        self::$DIME_VERSION_FLAGS_BEGIN_BYTE = \bindec('00001100');
        // version MB ME CF
        self::$DIME_VERSION_FLAGS_END_BYTE = \bindec('00001010');
        // type: 4bits + reserved: 4bits
        self::$DIME_TYPE_UNCHANGED_RESERVED = \bindec('00000000');
        // type 1: 4bits + reserved: 4bits
        self::$DIME_TYPE_MEDIA_RESERVED = \bindec('00010000');
        // type 2: 4bits + reserved: 4bits
        self::$DIME_TYPE_URI_RESERVED = \bindec('00100000');
        // type 3: 4bits + reserved: 4bits
        self::$DIME_TYPE_UNKNOWN_RESERVED = \bindec('00110000');
        // type 4: 4bits + reserved: 4bits
        self::$DIME_TYPE_NONE_RESERVED = \bindec('01000000');
    }

    /**
     * Constructs the Soap DIME request object.
     * @param string $url url to request
     * @param string $soap soap body
     * @param string $attachment attachment bytes
     * @param string $soapId soap message id
     * @param string $attachmentId attachment id
     * @param string $user user to auth (not required)
     * @param string $password password to auth (not required)
     */
    public function __construct($url, $soap, $attachment, $soapId, $attachmentId, $user = null, $password = null) {
        if (!\is_string($url) || !\is_string($soap) || !\is_string($attachment)
                || !\is_string($soapId) || !\is_string($attachmentId)) {
            throw new \Exception('All arguments need to be strings.');
        }
        $this->soapMessage = $soap;
        $this->attachmentContent = $attachment;
        $this->soapMessageId = $soapId;
        $this->attachmentId = $attachmentId;
        $this->url = $url;
        $this->user = $user;
        $this->password = $password;
    }

    private $soapMessage;
    private $attachmentContent;
    private $soapMessageId;
    private $attachmentId;
    private $url;
    private $user;
    private $password;
    private $debug = false;

    public function setDebug($debug) {
        $this->debug = $debug ? true : false;
    }

    /**
     * Returns padded data length.
     * @param number $len
     * @return number 
     */
    private static function getPadLength($len) {
        $pad = 0;
        if ($len) {
            $pad = $len % 4;
            if ($pad)
                $pad = 4 - $pad;
        }
        return $len + $pad;
    }

    /**
     * Returns whole DIME body.
     * @return bytes (string)
     */
    public function getDimeBody() {
        return $this->createSoapMessagePart() . $this->createAttachmentPart();
    }

    /**
     * Pads DIME data (see DIME help).
     * @param string $data data to pad
     * @return string
     */
    public static function padData($data) {
        return \str_pad($data, self::getPadLength(\strlen($data)), self::$PAD_STR);
    }

    /**
     * Soap part.
     * @return string
     */
    public function createSoapMessagePart() {
        $soapMessageIdPadded = self::padData($this->soapMessageId);
        $soapTypePadded = self::padData(self::SOAP_TYPE);
        $soapMessagePadded = self::padData($this->soapMessage);
        return $this->createSoapMessageHeader() . $soapMessageIdPadded . $soapTypePadded . $soapMessagePadded;
    }

    /**
     * Attachment part.
     * @return string
     */
    public function createAttachmentPart() {
        $attachmentIdPadded = self::padData($this->attachmentId);
        $attTypePadded = self::padData(self::ATTACHMENT_TYPE);
        $attPadded = self::padData($this->attachmentContent);
        return $this->createAttachmentHeader() . $attachmentIdPadded . $attTypePadded . $attPadded;
    }

    /**
     * Attachment header.
     * @return string
     */
    public function createAttachmentHeader() {
        $common = self::createEndPartHeader();
        $idLength = \pack('n*', \strlen($this->attachmentId)); // 16bit
        $typeLength = \pack('n*', \strlen(self::ATTACHMENT_TYPE)); // 16bit
        $dataLength = \pack('N*', \strlen($this->attachmentContent)); //32bit

        return $common . $idLength . $typeLength . $dataLength;
    }

    /**
     * Soap header.
     * @return string
     */
    public function createSoapMessageHeader() {
        $common = self::createBeginPartHeader();
        $idLength = \pack('n*', \strlen($this->soapMessageId)); // 16bit
        $typeLength = \pack('n*', \strlen(self::SOAP_TYPE)); // 16bit
        $dataLength = \pack('N*', \strlen($this->soapMessage)); //32bit

        return $common . $idLength . $typeLength . $dataLength;
    }

    /**
     * Creates the first DIME message header.
     * @return data
     */
    private static function createBeginPartHeader() {
        return \pack('c*', self::$DIME_VERSION_FLAGS_BEGIN_BYTE, self::$DIME_TYPE_URI_RESERVED, self::$DIME_OPT_LENGTH_BYTE1, self::$DIME_OPT_LENGTH_BYTE2);
    }

    /**
     * Creates the last DIME message header.
     * @return data
     */
    private static function createEndPartHeader() {
        return \pack('c*', self::$DIME_VERSION_FLAGS_END_BYTE, self::$DIME_TYPE_MEDIA_RESERVED, self::$DIME_OPT_LENGTH_BYTE1, self::$DIME_OPT_LENGTH_BYTE2);
    }

    /**
     * Executes the DIME request.
     * @return string request result
     */
    public function execute() {
        $wholeData = $this->getDimeBody();

        $postHeaders = array(
            'Content-Type: application/dime',
            'Accept: application/soap+xml, application/dime, multipart/related, text/*',
            'User-Agent: Axis/1.4 PHP request emulator',
            'Cache-Control: no-cache',
            'Pragma: no-cache',
            'SOAPAction: ""',
            'Content-Length: ' . \strlen($wholeData)
        );

        if (!empty($this->user)) {
            $postHeaders[] = SOAPHelper::createBasicAuthHeader($this->user, $this->password);
        }

        $postRequest = new POSTCURLRequest($this->url, $wholeData, $postHeaders);
        $postRequest->setDebug($this->debug);
        return $postRequest->execute();
    }

}

// calculates calculate constant bytes
DimeSOAPRequestWithAttachment::init();

/**
 * Dime record for parsing by DimeSoapResponseParser.
 */
class DimeRecord {

    public $version;
    public $first;
    public $last;
    public $chunked;
    public $type_format;
    public $options;
    public $id;
    public $type;
    public $data;

}

/**
 * Parses given DIME response into DimeRecord objects.
 */
class DimeSoapResponseParser {

    /**
     * Result array.
     * @var array
     */
    private $records;

    /**
     * Constructor. Parses given DIME response into DimeRecord objects.
     * @param string $input DIME data to parse
     */
    function __construct($input) {
        $this->records = array();
        $pos = 0;

        do {
            $r = new DimeRecord();

            // Shift out bitfields for the first fields
            $b = \ord($input[$pos++]);
            $r->version = ($b >> 3) & 31;
            $r->first = ($b >> 2) & 1;
            $r->last = ($b >> 1) & 1;
            $r->chunked = $b & 1;
            $r->type_format = (\ord($input[$pos++]) >> 4) & 15;

            // Fetch big-endian lengths
            $lengths = array();
            $lengths['options'] = \ord($input[$pos++]) << 8;
            $lengths['options'] |= \ord($input[$pos++]);

            $lengths['id'] = \ord($input[$pos++]) << 8;
            $lengths['id'] |= \ord($input[$pos++]);

            $lengths['type'] = \ord($input[$pos++]) << 8;
            $lengths['type'] |= \ord($input[$pos++]);

            $lengths['data'] = \ord($input[$pos++]) << 24;
            $lengths['data'] |= ( \ord($input[$pos++]) << 16);
            $lengths['data'] |= ( \ord($input[$pos++]) << 8);
            $lengths['data'] |= \ord($input[$pos++]);

            // Read in padded data
            foreach ($lengths as $lk => $lv) {
                $r->$lk = \substr($input, $pos, $lv);
                $pos += $lv;

                if ($lv & 3)
                    $pos += ( 4 - ($lv & 3));
            }

            $this->records[] = $r;
        }
        while ($pos < \strlen($input));
    }

    /**
     * Returns parsed DIME records.
     * @return array
     */
    public function getRecords() {
        return $this->records;
    }

}
