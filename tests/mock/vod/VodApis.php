<?php

namespace aliyun\sdk\tests\mock\vod;

use aliyun\sdk\core\lib\Request;

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setMaterialId($materialId)
 * @method string getMaterialId()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setTags($tags)
 * @method string getTags()
 * @method $this setCoverURL($coverUrl)
 * @method string getCoverURL()
 * @method $this setCateId($cateId)
 * @method int getCateId()
 */
class UpdateMaterial extends Request
{

}

/**
 * @method $this setCoverURL($coverUrl)
 * @method string getCoverURL()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setFileSize($fileSize)
 * @method int getFileSize()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setCateId($cateId)
 * @method int getCateId()
 * @method $this setTags($tags)
 * @method string getTags()
 */
class CreateUploadMaterial extends Request
{

}

/**
 * @method $this setBusinessType($businessType)
 * @method string getBusinessType()
 * @method $this setFileExtension($fileExtension)
 * @method string getFileExtension()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class CreateUploadMediaFile extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setCateId($cateId)
 * @method int getCateId()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setStatus($state)
 * @method string getStatus()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setSortBy($sortBy)
 * @method string getSortBy()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setSource($source)
 * @method string getSource()
 * @method $this setTitle($title)
 * @method string getTitle()
 */
class SearchMaterial extends Request
{

}

/**
 * @method $this setVideoIds($videoIds)
 * @method string getVideoIds()
 */
class SyncMaterial extends Request
{

}

/**
 * @method $this setMediaFileId($mediaFileId)
 * @method string getMediaFileId()
 * @method $this setCompanionResourceType($companionResourceType)
 * @method string getCompanionResourceType()
 * @method $this setCompanionResourceConfig($companionResourceConfig)
 * @method string getCompanionResourceConfig()
 * @method $this setResourceName($resourceName)
 * @method string getResourceName()
 * @method $this setResourceTags($resourceTags)
 * @method string getResourceTags()
 */
class AddCompanionresourceInfo extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setMaterialIds($materialIdStr)
 * @method string getMaterialIds()
 */
class DeleteMaterial extends Request
{

}

/**
 * @method $this setVideoType($videoType)
 * @method string getVideoType()
 * @method $this setBizDate($bizdate)
 * @method string getBizDate()
 */
class DescribeUserTopVideoByDay extends Request
{

}

/**
 * @method $this setMaterialId($materialId)
 * @method string getMaterialId()
 */
class GetMaterial extends Request
{

}

/**
 * @method $this setMaterialId($materialId)
 * @method string getMaterialId()
 */
class RefreshUploadMaterialToken extends Request
{

}

/**
 * @method $this setMediaId($MediaId)
 * @method string getMediaId()
 */
class GetVAEResult extends Request
{

}

/**
 * @method $this setMediaId($MediaId)
 * @method string getMediaId()
 * @method $this setStatus($Status)
 * @method string getStatus()
 * @method $this setSubUserId($SubUserId)
 * @method string getSubUserId()
 * @method $this setStage($Stage)
 * @method string getStage()
 * @method $this setReason($Reason)
 * @method string getReason()
 * @method $this setComment($Comment)
 * @method string getComment()
 * @method $this setPosition($Position)
 * @method Float getPosition()
 */
class AddReview extends Request
{

}

/**
 * @method $this setMediaId($MediaId)
 * @method string getMediaId()
 */
class GetReviews extends Request
{

}

/**
 * @method $this setCoverURL($coverUrl)
 * @method string getCoverURL()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setIP($createIp)
 * @method string getIP()
 * @method $this setCallback($callback)
 * @method string getCallback()
 */
class UploadVideo extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setCateName($cateName)
 * @method string getCateName()
 * @method $this setParentId($parentId)
 * @method string getParentId()
 */
class AddCategory extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setFileType($fileType)
 * @method int getFileType()
 */
class GetImageUploadAuth extends Request
{

}

/**
 * @method $this setVideoId($mediaId)
 * @method string getVideoId()
 */
class GetVideoInfo extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class GetCategoryList extends Request
{

}

/**
 * @method $this setCateId($cateId)
 * @method int getCateId()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setSortBy($sortBy)
 * @method string getSortBy()
 */
class GetVideoList extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setCateId($cateId)
 * @method string getCateId()
 */
class DeleteCategory extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class GetDomainList extends Request
{

}

/**
 * @method $this setVideoIds($mediaIdStr)
 * @method string getVideoIds()
 */
class DeleteVideo extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setCateName($cateName)
 * @method string getCateName()
 * @method $this setCateId($cateId)
 * @method string getCateId()
 */
class UpdateCategoryName extends Request
{

}

/**
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 */
class GetVideoPlayAuth extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class GetCategoryTree extends Request
{

}

/**
 * @method $this setCoverURL($coverUrl)
 * @method string getCoverURL()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setFileSize($fileSize)
 * @method int getFileSize()
 * @method $this setIP($createIp)
 * @method string getIP()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setCateId($cateId)
 * @method int getCateId()
 * @method $this setTags($tags)
 * @method string getTags()
 */
class CreateUploadVideo extends Request
{

}

/**
 * @method $this setVideoId($mediaId)
 * @method string getVideoId()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setTags($tags)
 * @method string getTags()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setCoverURL($coverUrl)
 * @method string getCoverURL()
 * @method $this setCateId($cateId)
 * @method int getCateId()
 */
class UpdateVideoInfo extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setStartTimeUTC($startTimeUTC)
 * @method string getStartTimeUTC()
 * @method $this setEndTimeUTC($endTimeUTC)
 * @method string getEndTimeUTC()
 * @method $this setLevel($level)
 * @method string getLevel()
 * @method $this setDivision($division)
 * @method string getDivision()
 */
class GetOSSFlowStatis extends Request
{

}

/**
 * @method $this setDimension($dimension)
 * @method string getDimension()
 * @method $this setArea($area)
 * @method string getArea()
 */
class DescribeVodUserBillPrediction extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setIspNameEn($ispName)
 * @method string getIspNameEn()
 * @method $this setLocationNameEn($locName)
 * @method string getLocationNameEn()
 */
class DescribeVodDomainRealTimeHttpCodeData extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeVodDomainRealTimeReqHitRateData extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setStorageLocation($storageLocation)
 * @method string getStorageLocation()
 */
class GetStorageInfo extends Request
{

}

/**
 * @method $this setTranscodeTemplateGroupId($transcodeTemplateGroupId)
 * @method string getTranscodeTemplateGroupId()
 */
class SetDefaultTranscodeTemplateGroup extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setAIVideoPornRecogConfig($config)
 * @method string getAIVideoPornRecogConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class SubmitAIVideoPornRecogJob extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeVodDomainDetail extends Request
{

}

/**
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setUpdateContent($updateContent)
 * @method string getUpdateContent()
 */
class UpdateAttachedMediaInfos extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setTimeline($timeline)
 * @method string getTimeline()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setCoverURL($coverUrl)
 * @method string getCoverURL()
 */
class UpdateEditingProject extends Request
{

}

/**
 * @method $this setDomainNames($domainNames)
 * @method string getDomainNames()
 */
class BatchStartVodDomain extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOperation($operation)
 * @method string getOperation()
 * @method $this setTypes($types)
 * @method string getTypes()
 */
class SetAIService extends Request
{

}

/**
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 * @method $this setSnapshotType($snapshotType)
 * @method string getSnapshotType()
 * @method $this setAuthTimeout($authTimeout)
 * @method string getAuthTimeout()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 * @method $this setPageNo($pageNo)
 * @method string getPageNo()
 */
class ListSnapshots extends Request
{

}

/**
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setIsContainsTemplates($containTemplates)
 * @method bool getIsContainsTemplates()
 */
class ListTemplateGroupConsole extends Request
{

}

/**
 * @method $this setCateName($cateName)
 * @method string getCateName()
 * @method $this setCateId($cateId)
 * @method int getCateId()
 */
class UpdateCategory extends Request
{

}

/**
 * @method $this setObjectPath($objectPath)
 * @method string getObjectPath()
 */
class PreloadVodObjectCaches extends Request
{

}

/**
 * @method $this setVideoType($videoType)
 * @method string getVideoType()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeUserTimeRangeByDay extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeVodDomainRegionData extends Request
{

}

/**
 * @method $this setObjectPath($objectPath)
 * @method string getObjectPath()
 * @method $this setObjectType($objectType)
 * @method string getObjectType()
 */
class RefreshVodObjectCaches extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeVodDomainRealTimeByteHitRateData extends Request
{

}

/**
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 */
class ListTranscodeTask extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setTimeline($timeline)
 * @method string getTimeline()
 * @method $this setCoverURL($coverUrl)
 * @method string getCoverURL()
 */
class AddEditingProject extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setSources($sources)
 * @method string getSources()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setTopLevelDomain($topLevelDomain)
 * @method string getTopLevelDomain()
 */
class UpdateVodDomain extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setAIVideoCoverJobIds($jobIds)
 * @method string getAIVideoCoverJobIds()
 */
class ListAIVideoCoverJob extends Request
{

}

/**
 * @method $this setDomainName($domain)
 * @method string getDomainName()
 */
class DescribeVodDomainCertificateInfo extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeVodDomainsUsageByDay extends Request
{

}

/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setTemplateType($templateType)
 * @method string getTemplateType()
 * @method $this setSubTemplateType($subTemplateType)
 * @method string getSubTemplateType()
 * @method $this setTemplateConfig($templateConfig)
 * @method string getTemplateConfig()
 */
class AddVodTemplate extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setMaterialIds($materialIds)
 * @method string getMaterialIds()
 */
class SetEditingProjectMaterials extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setCallbackSwitch($callbackSwitch)
 * @method string getCallbackSwitch()
 * @method $this setCallbackType($callbackType)
 * @method string getCallbackType()
 * @method $this setCallbackURL($callbackURL)
 * @method string getCallbackURL()
 * @method $this setEventTypeList($eventTypeList)
 * @method string getEventTypeList()
 * @method $this setAuthSwitch($authSwitch)
 * @method string getAuthSwitch()
 * @method $this setAuthKey($authKey)
 * @method string getAuthKey()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setMnsEndpoint($mnsEndpoint)
 * @method string getMnsEndpoint()
 * @method $this setMnsQueueName($mnsQueueName)
 * @method string getMnsQueueName()
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class SetMessageCallback extends Request
{

}

/**
 * @method $this setWatermarkId($watertempId)
 * @method string getWatermarkId()
 */
class DeleteWatermarkConsole extends Request
{

}

/**
 * @method $this setJobIds($jobIds)
 * @method string getJobIds()
 * @method $this setUploadURLs($uploadUrls)
 * @method string getUploadURLs()
 */
class GetURLUploadInfos extends Request
{

}

/**
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setConfigs($configs)
 * @method string getConfigs()
 */
class UpdateCustomTemplateAndGroupConsole extends Request
{

}

/**
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 */
class GetMediaAuditResultTimeline extends Request
{

}

/**
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setTimeline($timeline)
 * @method string getTimeline()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setCoverURL($coverUrl)
 * @method string getCoverURL()
 * @method $this setMediaMetadata($mediaMetadata)
 * @method string getMediaMetadata()
 * @method $this setProduceConfig($produceConfig)
 * @method string getProduceConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class ProduceEditingProjectVideo extends Request
{

}

/**
 * @method $this setVideoid($videoid)
 * @method string getVideoid()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeUserVvByVideoid extends Request
{

}

/**
 * @method $this setIdentityType($identityType)
 * @method string getIdentityType()
 * @method $this setIdentityName($identityName)
 * @method string getIdentityName()
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class ListAppPoliciesForIdentity extends Request
{

}

/**
 * @method $this setAppIdentification($appIdentification)
 * @method string getAppIdentification()
 * @method $this setAppDecryptKey($appDecryptKey)
 * @method string getAppDecryptKey()
 */
class GenerateDownloadSecretKey extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeVodDomainRealTimeSrcBpsData extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setProjectIds($projectIdStr)
 * @method string getProjectIds()
 */
class DeleteEditingProject extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setTypes($types)
 * @method string getTypes()
 * @method $this setConfig($config)
 * @method string getConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class SubmitAIJob extends Request
{

}

/**
 * @method $this setSource($source)
 * @method string getSource()
 * @method $this setClientId($clientId)
 * @method string getClientId()
 * @method $this setBusinessType($businessType)
 * @method string getBusinessType()
 * @method $this setTerminalType($terminalType)
 * @method string getTerminalType()
 * @method $this setDeviceModel($deviceModel)
 * @method string getDeviceModel()
 * @method $this setAppVersion($appVersion)
 * @method string getAppVersion()
 * @method $this setAuthTimestamp($authTimestamp)
 * @method int getAuthTimestamp()
 * @method $this setAuthInfo($authInfo)
 * @method string getAuthInfo()
 * @method $this setPrefix($prefix)
 * @method string getPrefix()
 */
class AssumeOssRole extends Request
{

}

/**
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 * @method $this setAuthInfo($authInfo)
 * @method string getAuthInfo()
 */
class GetVideoConfig extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setInterval($interval)
 * @method string getInterval()
 */
class DescribeVodDomainSrcBpsData extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setMediaURL($mediaURL)
 * @method string getMediaURL()
 * @method $this setMediaType($mediaType)
 * @method string getMediaType()
 * @method $this setMediaSequences($mediaSequences)
 * @method string getMediaSequences()
 */
class AddMediaSequences extends Request
{

}

/**
 * @method $this setVideoId($mediaId)
 * @method string getVideoId()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setSortBy($sortBy)
 * @method string getSortBy()
 */
class GetAuditHistory extends Request
{

}

/**
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 * @method $this setPreprocessType($preprocessType)
 * @method string getPreprocessType()
 */
class SubmitPreprocessJobsConsole extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeVodDomainCname extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setLevel($level)
 * @method string getLevel()
 */
class GetCDNStatis extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setAIVideoPornRecogJobIds($jobIds)
 * @method string getAIVideoPornRecogJobIds()
 */
class ListAIVideoPornRecogJob extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class GetMessageCallback extends Request
{

}

/**
 * @method $this setTemplateType($templateType)
 * @method string getTemplateType()
 */
class ListAITemplate extends Request
{

}

/**
 * @method $this setVodTemplateId($vodTemplateId)
 * @method string getVodTemplateId()
 */
class SetDefaultVodTemplate extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class StartVodDomain extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 */
class GetMessageCallbackEventList extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setJobIds($jobIds)
 * @method string getJobIds()
 */
class ListAIJob extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setObjectPath($objectPath)
 * @method string getObjectPath()
 * @method $this setObjectType($objectType)
 * @method string getObjectType()
 */
class RefreshObjectCaches extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CreateOrder extends Request
{

}

/**
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 */
class SetDefaultAITemplate extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setAIVideoCoverConfig($config)
 * @method string getAIVideoCoverConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class SubmitAIVideoCoverJob extends Request
{

}

/**
 * @method $this setVideoIds($videoIds)
 * @method string getVideoIds()
 */
class GetTranscodeSummary extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setAIASRJobIds($jobIds)
 * @method string getAIASRJobIds()
 */
class ListAIASRJob extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setMediaType($mediaType)
 * @method string getMediaType()
 */
class DeleteMultipartUpload extends Request
{

}

/**
 * @method $this setPolicyName($policyName)
 * @method string getPolicyName()
 * @method $this setPolicyValue($policyValue)
 * @method string getPolicyValue()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class CreateAppPolicy extends Request
{

}

/**
 * @method $this setMediaIds($mediaIds)
 * @method string getMediaIds()
 * @method $this setAuthTimeout($authTimeout)
 * @method int getAuthTimeout()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setOutputType($outputType)
 * @method string getOutputType()
 */
class GetAttachedMediaInfo extends Request
{

}

/**
 * @method $this setTemplateName($templateName)
 * @method string getTemplateName()
 * @method $this setTemplateType($templateType)
 * @method string getTemplateType()
 * @method $this setTemplateConfig($templateConfig)
 * @method string getTemplateConfig()
 */
class AddAITemplate extends Request
{

}

/**
 * @method $this setTranscodeTemplateGroupId($transcodeTemplateGroupId)
 * @method string getTranscodeTemplateGroupId()
 * @method $this setTranscodeTemplateIds($transcodeTemplateIdList)
 * @method string getTranscodeTemplateIds()
 * @method $this setForceDelGroup($forceDelGroup)
 * @method string getForceDelGroup()
 */
class DeleteTranscodeTemplateGroup extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setAIVideoTagJobIds($jobIds)
 * @method string getAIVideoTagJobIds()
 */
class ListAIVideoTagJob extends Request
{

}

/**
 * @method $this setAuditContent($auditContent)
 * @method string getAuditContent()
 */
class CreateAudit extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setStartStatisTime($startStatisTime)
 * @method string getStartStatisTime()
 * @method $this setEndStatisTime($endStatisTime)
 * @method string getEndStatisTime()
 * @method $this setLevel($level)
 * @method string getLevel()
 */
class GetCDNStatisSum extends Request
{

}

/**
 * @method $this setWorkflowId($workflowId)
 * @method string getWorkflowId()
 */
class GetWorkflow extends Request
{

}

/**
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setAppIds($appIds)
 * @method string getAppIds()
 */
class GetAppInfos extends Request
{

}

/**
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setTargetAppId($targetAppId)
 * @method string getTargetAppId()
 * @method $this setResourceType($resourceType)
 * @method string getResourceType()
 * @method $this setResourceIds($resourceIds)
 * @method string getResourceIds()
 */
class MoveAppResource extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeVodDomainUvData extends Request
{

}

/**
 * @method $this setVideoId($mediaId)
 * @method string getVideoId()
 * @method $this setTemplateGroupId($groupId)
 * @method string getTemplateGroupId()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setEncryptConfig($encryptConfig)
 * @method string getEncryptConfig()
 * @method $this setOverrideParams($overrideParams)
 * @method string getOverrideParams()
 * @method $this setPriority($priority)
 * @method string getPriority()
 */
class SubmitTranscodeJobs extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setStorageLocation($storageLocation)
 * @method string getStorageLocation()
 * @method $this setStorageACL($storageACL)
 * @method string getStorageACL()
 */
class SetStorageACL extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setInterval($interval)
 * @method string getInterval()
 */
class DescribeVodDomainSrcTrafficData extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setMediaType($mediaType)
 * @method string getMediaType()
 */
class GetAuditResult extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageIndex)
 * @method int getPageNumber()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeVodDomainLog extends Request
{

}

/**
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setCommand($command)
 * @method string getCommand()
 */
class ControlVodAppService extends Request
{

}

/**
 * @method $this setBizDate($bizdate)
 * @method string getBizDate()
 * @method $this setPageNo($pageNum)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribePlayTopVideos extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setAIVideoCensorJobIds($jobIds)
 * @method string getAIVideoCensorJobIds()
 */
class ListAIVideoCensorJob extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setObjectPath($objectPath)
 * @method string getObjectPath()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setObjectType($objectType)
 * @method string getObjectType()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeRefreshTasks extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class OpenVodService extends Request
{

}

/**
 * @method $this setWatermarkId($watertempId)
 * @method string getWatermarkId()
 */
class SetDefaultWatermark extends Request
{

}

/**
 * @method $this setVideoType($videoType)
 * @method string getVideoType()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeUserVvByDay extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setPersonName($personName)
 * @method string getPersonName()
 * @method $this setPersonId($personId)
 * @method string getPersonId()
 * @method $this setPersonLibrary($personLibrary)
 * @method string getPersonLibrary()
 * @method $this setCategory($category)
 * @method string getCategory()
 * @method $this setImageIds($imageIds)
 * @method string getImageIds()
 */
class FaceRegistration extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setAIVideoTerrorismRecogJobIds($jobIds)
 * @method string getAIVideoTerrorismRecogJobIds()
 */
class ListAIVideoTerrorismRecogJob extends Request
{

}

/**
 * @method $this setWatermarkId($watertempId)
 * @method string getWatermarkId()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 */
class GetWatermarkConsole extends Request
{

}

/**
 * @method $this setVideoIds($mediaIdStr)
 * @method string getVideoIds()
 * @method $this setForce($force)
 * @method bool getForce()
 */
class DeleteMezzanines extends Request
{

}

/**
 * @method $this setIdentityType($identityType)
 * @method string getIdentityType()
 * @method $this setIdentityName($identityName)
 * @method string getIdentityName()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setPolicyNames($policyNames)
 * @method string getPolicyNames()
 */
class AttachAppPolicyToIdentity extends Request
{

}

/**
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribePlayUserTotal extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setInterval($interval)
 * @method string getInterval()
 */
class DescribeVodDomainHttpCodeData extends Request
{

}

/**
 * @method $this setUpdateContent($updateContent)
 * @method string getUpdateContent()
 */
class UpdateVideoInfos extends Request
{

}

/**
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setDomainStatus($domainStatus)
 * @method string getDomainStatus()
 * @method $this setDomainSearchType($domainSearchType)
 * @method string getDomainSearchType()
 * @method $this setCdnType($webSiteType)
 * @method string getCdnType()
 * @method $this setCheckDomainShow($checkDomainShow)
 * @method bool getCheckDomainShow()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setFuncId($funcId)
 * @method string getFuncId()
 * @method $this setFuncFilter($funcFilter)
 * @method string getFuncFilter()
 */
class DescribeVodUserDomains extends Request
{

}

/**
 * @method $this setVideoIds($mediaIds)
 * @method string getVideoIds()
 */
class GetVideoInfos extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeVodDomainRealTimeTrafficData extends Request
{

}

/**
 * @method $this setPolicyName($policyName)
 * @method string getPolicyName()
 * @method $this setPolicyValue($policyValue)
 * @method string getPolicyValue()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class UpdateAppPolicy extends Request
{

}

/**
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 * @method $this setEditType($editType)
 * @method string getEditType()
 * @method $this setEditConfig($editConfig)
 * @method string getEditConfig()
 */
class EditVideoIndexFile extends Request
{

}

/**
 * @method $this setVideoType($videoType)
 * @method string getVideoType()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeUserAvgCountByDay extends Request
{

}

/**
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setUpdateContent($updateContent)
 * @method string getUpdateContent()
 */
class UpdateImageInfos extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setMaterialIds($materialIds)
 * @method string getMaterialIds()
 * @method $this setMaterialType($materialType)
 * @method string getMaterialType()
 */
class AddEditingProjectMaterials extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 */
class GetEditingProject extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setFunctionNames($functionNames)
 * @method string getFunctionNames()
 */
class DescribeVodDomainConfigs extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setInterval($interval)
 * @method string getInterval()
 * @method $this setIspNameEn($ispName)
 * @method string getIspNameEn()
 * @method $this setLocationNameEn($locName)
 * @method string getLocationNameEn()
 */
class DescribeVodDomainHitRateData extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeVodDomainISPData extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setObjectPath($objectPath)
 * @method string getObjectPath()
 */
class PushObjectCache extends Request
{

}

/**
 * @method $this setHorizontalOffet($horizontalOffet)
 * @method string getHorizontalOffet()
 * @method $this setHorizontalOffset($horizontalOffset)
 * @method string getHorizontalOffset()
 * @method $this setVerticalOffset($verticalOffset)
 * @method string getVerticalOffset()
 * @method $this setPosition($position)
 * @method string getPosition()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setBucket($bucket)
 * @method string getBucket()
 * @method $this setObject($object)
 * @method string getObject()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setWidth($width)
 * @method string getWidth()
 * @method $this setHeight($height)
 * @method string getHeight()
 * @method $this setActive($active)
 * @method string getActive()
 * @method $this setScreenMode($screenMode)
 * @method string getScreenMode()
 * @method $this setVideoWidth($videoWidth)
 * @method int getVideoWidth()
 * @method $this setVideoHeight($videoHeight)
 * @method int getVideoHeight()
 * @method $this setWatermarkConfig($watermarkConfig)
 * @method string getWatermarkConfig()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 */
class AddWatermarkConsole extends Request
{

}

/**
 * @method $this setHorizontalOffet($horizontalOffet)
 * @method string getHorizontalOffet()
 * @method $this setHorizontalOffset($horizontalOffset)
 * @method string getHorizontalOffset()
 * @method $this setVerticalOffset($verticalOffset)
 * @method string getVerticalOffset()
 * @method $this setPosition($position)
 * @method string getPosition()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setBucket($bucket)
 * @method string getBucket()
 * @method $this setObject($object)
 * @method string getObject()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setWidth($width)
 * @method string getWidth()
 * @method $this setHeight($height)
 * @method string getHeight()
 * @method $this setWatermarkId($watertempId)
 * @method string getWatermarkId()
 * @method $this setScreenMode($screenMode)
 * @method string getScreenMode()
 * @method $this setVideoWidth($videoWidth)
 * @method int getVideoWidth()
 * @method $this setVideoHeight($videoHeight)
 * @method int getVideoHeight()
 * @method $this setWatermarkConfig($watermarkConfig)
 * @method string getWatermarkConfig()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 */
class UpdateWatermarkConsole extends Request
{

}

/**
 * @method $this setPolicyType($policyType)
 * @method string getPolicyType()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListAppPolicy extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setMaterialType($materialType)
 * @method string getMaterialType()
 */
class GetEditingProjectMaterials extends Request
{

}

/**
 * @method $this setVodTemplateId($vodTemplateId)
 * @method string getVodTemplateId()
 */
class GetVodTemplate extends Request
{

}

/**
 * @method $this setMediaIds($mediaIds)
 * @method string getMediaIds()
 */
class DeleteAttachedMedia extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setArea($area)
 * @method string getArea()
 * @method $this setField($field)
 * @method string getField()
 */
class DescribeVodDomainUsageData extends Request
{

}

/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setWatermarkId($watertempId)
 * @method string getWatermarkId()
 * @method $this setWatermarkConfig($watermarkConfig)
 * @method string getWatermarkConfig()
 */
class UpdateWatermark extends Request
{

}

/**
 * @method $this setTranscodeTemplateGroupId($transcodeTemplateGroupId)
 * @method string getTranscodeTemplateGroupId()
 * @method $this setTranscodeTemplateIdList($transcodeTemplateIdList)
 * @method string getTranscodeTemplateIdList()
 */
class DeleteTranscodeTemplates extends Request
{

}

/**
 * @method $this setTranscodeTaskId($transcodeProcessId)
 * @method string getTranscodeTaskId()
 */
class GetTranscodeTask extends Request
{

}

/**
 * @method $this setSource($source)
 * @method string getSource()
 * @method $this setClientId($clientId)
 * @method string getClientId()
 * @method $this setBusinessType($businessType)
 * @method string getBusinessType()
 * @method $this setTerminalType($terminalType)
 * @method string getTerminalType()
 * @method $this setDeviceModel($deviceModel)
 * @method string getDeviceModel()
 * @method $this setAppVersion($appVersion)
 * @method string getAppVersion()
 * @method $this setAuthTimestamp($authTimestamp)
 * @method int getAuthTimestamp()
 * @method $this setAuthInfo($authInfo)
 * @method string getAuthInfo()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setFileSize($fileSize)
 * @method int getFileSize()
 * @method $this setFileCreateTime($fileCreateTime)
 * @method string getFileCreateTime()
 * @method $this setFileHash($fileHash)
 * @method string getFileHash()
 * @method $this setUploadRatio($uploadRatio)
 * @method Float getUploadRatio()
 * @method $this setUploadId($uploadId)
 * @method string getUploadId()
 * @method $this setDonePartsCount($donePartsCount)
 * @method int getDonePartsCount()
 * @method $this setTotalPart($totalPart)
 * @method int getTotalPart()
 * @method $this setPartSize($partSize)
 * @method int getPartSize()
 * @method $this setUploadPoint($uploadPoint)
 * @method string getUploadPoint()
 * @method $this setUserId($userId)
 * @method int getUserId()
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 * @method $this setUploadAddress($uploadAddress)
 * @method string getUploadAddress()
 */
class ReportUploadProgress extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setStorageRegion($storageRegion)
 * @method string getStorageRegion()
 * @method $this setStorageType($storageType)
 * @method string getStorageType()
 * @method $this setStorageStatus($storageStatus)
 * @method string getStorageStatus()
 * @method $this setDivision($division)
 * @method string getDivision()
 */
class GetStorageList extends Request
{

}

/**
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 */
class DeleteAITemplate extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 */
class GetMediaDNAResult extends Request
{

}

/**
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setObjectPath($content)
 * @method string getObjectPath()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setObjectType($taskType)
 * @method string getObjectType()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStatus($taskStatusStr)
 * @method string getStatus()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 */
class DescribeVodRefreshTasks extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setStorageType($storageType)
 * @method string getStorageType()
 * @method $this setStorageRegion($storageRegion)
 * @method string getStorageRegion()
 * @method $this setStorageLocation($storageLocation)
 * @method string getStorageLocation()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method string getResourceRealOwnerId()
 */
class AddStorage extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setLevel($level)
 * @method string getLevel()
 * @method $this setStartTimeUTC($startTimeUTC)
 * @method string getStartTimeUTC()
 * @method $this setEndTimeUTC($endTimeUTC)
 * @method string getEndTimeUTC()
 * @method $this setDivision($division)
 * @method string getDivision()
 */
class GetOSSStatis extends Request
{

}

/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setTranscodeTemplateList($transcodeTemplateList)
 * @method string getTranscodeTemplateList()
 * @method $this setLocked($locked)
 * @method string getLocked()
 * @method $this setTranscodeTemplateGroupId($transcodeTemplateGroupId)
 * @method string getTranscodeTemplateGroupId()
 */
class UpdateTranscodeTemplateGroup extends Request
{

}

/**
 * @method $this setTemplateType($templateType)
 * @method string getTemplateType()
 */
class GetDefaultAITemplate extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setSortBy($sortBy)
 * @method string getSortBy()
 * @method $this setPercent($percent)
 * @method string getPercent()
 */
class DescribeVodDomainTopReferVisit extends Request
{

}

/**
 * @method $this setChannel($channel)
 * @method string getChannel()
 * @method $this setLegalSwitch($legalSwitch)
 * @method string getLegalSwitch()
 */
class SetCheckChannel extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 */
class GetStorageRegionList extends Request
{

}

/**
 * @method $this setSecurityGroupName($securityGroupName)
 * @method string getSecurityGroupName()
 */
class ListAuditSecurityIp extends Request
{

}

/**
 * @method $this setRegisterMetadatas($registerMetadatas)
 * @method string getRegisterMetadatas()
 * @method $this setTemplateGroupId($templateGroupId)
 * @method string getTemplateGroupId()
 * @method $this setWorkFlowId($workFlowId)
 * @method string getWorkFlowId()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class RegisterMedia extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setAIVideoFaceRecogConfig($config)
 * @method string getAIVideoFaceRecogConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class SubmitAIVideoFaceRecogJob extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class GetTotalStatis extends Request
{

}

/**
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 */
class SubmitAIMediaAuditJob extends Request
{

}

/**
 * @method $this setPolicyNames($policyNames)
 * @method string getPolicyNames()
 */
class GetAppPolicies extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setStorageLocation($storageLocation)
 * @method string getStorageLocation()
 */
class SetDefaultUploadStorage extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setAIASRConfig($config)
 * @method string getAIASRConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class SubmitAIASRJob extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setInterval($interval)
 * @method string getInterval()
 * @method $this setIspNameEn($ispName)
 * @method string getIspNameEn()
 * @method $this setLocationNameEn($locName)
 * @method string getLocationNameEn()
 */
class DescribeVodDomainQpsData extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setSources($sources)
 * @method string getSources()
 * @method $this setCheckUrl($checkUrl)
 * @method string getCheckUrl()
 * @method $this setScope($scope)
 * @method string getScope()
 */
class AddVodDomain extends Request
{

}

/**
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 * @method $this setAuthTimeout($authTimeout)
 * @method int getAuthTimeout()
 * @method $this setPreviewSegment($previewSegment)
 * @method bool getPreviewSegment()
 * @method $this setOutputType($outputType)
 * @method string getOutputType()
 * @method $this setAdditionType($additionType)
 * @method string getAdditionType()
 */
class GetMezzanineInfo extends Request
{

}

/**
 * @method $this setIdentityType($identityType)
 * @method string getIdentityType()
 * @method $this setIdentityName($identityName)
 * @method string getIdentityName()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setPolicyNames($policyNames)
 * @method string getPolicyNames()
 */
class DetachAppPolicyFromIdentity extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeVodDomainPvData extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeVodDomainRealTimeSrcTrafficData extends Request
{

}

/**
 * @method $this setVideoType($videoType)
 * @method string getVideoType()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeUserUvByDay extends Request
{

}

/**
 * @method $this setWorkflowId($workflowId)
 * @method string getWorkflowId()
 */
class DeleteWorkflow extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setAIVideoTerrorismRecogConfig($config)
 * @method string getAIVideoTerrorismRecogConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class SubmitAIVideoTerrorismRecogJob extends Request
{

}

/**
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setBusinessType($mediaType)
 * @method string getBusinessType()
 * @method $this setMediaExt($mediaExt)
 * @method string getMediaExt()
 * @method $this setFileName($originalFileName)
 * @method string getFileName()
 * @method $this setFileSize($fileSize)
 * @method string getFileSize()
 * @method $this setTags($tags)
 * @method string getTags()
 * @method $this setCateId($cateId)
 * @method int getCateId()
 * @method $this setStorageLocation($storageLocation)
 * @method string getStorageLocation()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setUserData($userData)
 * @method string getUserData()
 * @method $this setCateIds($CateIds)
 * @method string getCateIds()
 */
class CreateUploadAttachedMedia extends Request
{

}

/**
 * @method $this setTemplateType($templateType)
 * @method string getTemplateType()
 */
class ListVodTemplate extends Request
{

}

/**
 * @method $this setDownloadSwitch($downloadSwitch)
 * @method string getDownloadSwitch()
 * @method $this setMetricConfig($metricConfig)
 * @method string getMetricConfig()
 * @method $this setAIConfig($aIConfig)
 * @method string getAIConfig()
 * @method $this setAuditConfig($auditConfig)
 * @method string getAuditConfig()
 */
class SetCustomerConfig extends Request
{

}

/**
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method string getResourceRealOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setLogDay($logDay)
 * @method string getLogDay()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNo($pageNumber)
 * @method int getPageNo()
 */
class DescribeCdnDomainLogs extends Request
{

}

/**
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListAppInfo extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDomainNames($domainNames)
 * @method string getDomainNames()
 * @method $this setFunctions($functions)
 * @method string getFunctions()
 */
class BatchSetVodDomainConfigs extends Request
{

}

/**
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class UpdateAppInfo extends Request
{

}

/**
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 * @method $this setPreprocessType($preprocessType)
 * @method string getPreprocessType()
 */
class SubmitPreprocessJobs extends Request
{

}

/**
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class DeleteAppInfo extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setConfigId($configId)
 * @method string getConfigId()
 */
class DeleteVodSpecificConfig extends Request
{

}

/**
 * @method $this setClientId($clientId)
 * @method string getClientId()
 * @method $this setBusinessType($businessType)
 * @method string getBusinessType()
 * @method $this setTerminalType($terminalType)
 * @method string getTerminalType()
 * @method $this setDeviceModel($deviceModel)
 * @method string getDeviceModel()
 * @method $this setAppVersion($appVersion)
 * @method string getAppVersion()
 * @method $this setAuthTimestamp($authTimestamp)
 * @method int getAuthTimestamp()
 * @method $this setAuthInfo($authInfo)
 * @method string getAuthInfo()
 */
class AssumeSlsRole extends Request
{

}

/**
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setAppName($AppName)
 * @method string getAppName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 */
class CreateAppInfo extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeRefreshQuota extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ListAIStatisType extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setStorageLocation($storageLocation)
 * @method string getStorageLocation()
 */
class DeleteStorage extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setCertName($certName)
 * @method string getCertName()
 * @method $this setSSLProtocol($sslProtocol)
 * @method string getSSLProtocol()
 * @method $this setSSLPub($sslPub)
 * @method string getSSLPub()
 * @method $this setSSLPri($sslPri)
 * @method string getSSLPri()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class SetVodDomainCertificate extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setInterval($interval)
 * @method string getInterval()
 * @method $this setIspNameEn($ispName)
 * @method string getIspNameEn()
 * @method $this setLocationNameEn($locName)
 * @method string getLocationNameEn()
 */
class DescribeVodDomainBpsData extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setAIVideoFaceRecogJobIds($jobIds)
 * @method string getAIVideoFaceRecogJobIds()
 */
class ListAIVideoFaceRecogJob extends Request
{

}

/**
 * @method $this setJobIds($jobIds)
 * @method string getJobIds()
 * @method $this setVideoId($mediaId)
 * @method string getVideoId()
 */
class DeleteStream extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 */
class DeleteVodDomain extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setRecentNumber($recentNumber)
 * @method int getRecentNumber()
 */
class SubmitDNAInitializationJob extends Request
{

}

/**
 * @method $this setWatermarkId($watertempId)
 * @method string getWatermarkId()
 */
class GetWatermark extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setInterval($interval)
 * @method string getInterval()
 * @method $this setIspNameEn($ispName)
 * @method string getIspNameEn()
 * @method $this setLocationNameEn($locName)
 * @method string getLocationNameEn()
 */
class DescribeVodDomainTrafficData extends Request
{

}

/**
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 */
class GetMediaAuditResult extends Request
{

}

/**
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setConfigs($configs)
 * @method string getConfigs()
 */
class AddCustomTemplateAndGroupConsole extends Request
{

}

/**
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setImageType($imageType)
 * @method string getImageType()
 * @method $this setImageExt($imageExt)
 * @method string getImageExt()
 * @method $this setOriginalFileName($originalFileName)
 * @method string getOriginalFileName()
 * @method $this setTags($tags)
 * @method string getTags()
 * @method $this setStorageLocation($storageLocation)
 * @method string getStorageLocation()
 * @method $this setCateId($cateId)
 * @method int getCateId()
 * @method $this setUserData($userData)
 * @method string getUserData()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class CreateUploadImage extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class StopVodDomain extends Request
{

}

/**
 * @method $this setDomainNames($domainNames)
 * @method string getDomainNames()
 */
class BatchStopVodDomain extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setAIVideoSummaryConfig($config)
 * @method string getAIVideoSummaryConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class SubmitAIVideoSummaryJob extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setSortBy($sortBy)
 * @method string getSortBy()
 * @method $this setPercent($percent)
 * @method string getPercent()
 */
class DescribeVodDomainTopUrlVisit extends Request
{

}

/**
 * @method $this setImageId($mediaId)
 * @method string getImageId()
 * @method $this setAuthTimeout($authTimeout)
 * @method int getAuthTimeout()
 * @method $this setOutputType($outputType)
 * @method string getOutputType()
 */
class GetImageInfo extends Request
{

}

/**
 * @method $this setVideoId($mediaId)
 * @method string getVideoId()
 */
class RefreshUploadVideo extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setAIVideoCensorConfig($config)
 * @method string getAIVideoCensorConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class SubmitAIVideoCensorJob extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class DeleteMessageCallback extends Request
{

}

/**
 * @method $this setWatermarkId($watertempId)
 * @method string getWatermarkId()
 */
class DeleteWatermark extends Request
{

}

/**
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class GetTemplateGroupConsole extends Request
{

}

/**
 * @method $this setSecurityGroupName($securityGroupName)
 * @method string getSecurityGroupName()
 * @method $this setIps($ips)
 * @method string getIps()
 * @method $this setOperateMode($operateMode)
 * @method string getOperateMode()
 */
class SetAuditSecurityIp extends Request
{

}

/**
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 * @method $this setFormats($formats)
 * @method string getFormats()
 * @method $this setAuthTimeout($authTimeout)
 * @method int getAuthTimeout()
 * @method $this setRand($rand)
 * @method string getRand()
 * @method $this setAuthInfo($authInfo)
 * @method string getAuthInfo()
 * @method $this setChannel($channel)
 * @method string getChannel()
 * @method $this setPlayerVersion($playerVersion)
 * @method string getPlayerVersion()
 * @method $this setOutputType($outputType)
 * @method string getOutputType()
 * @method $this setStreamType($streamType)
 * @method string getStreamType()
 * @method $this setReAuthInfo($reAuthInfo)
 * @method string getReAuthInfo()
 * @method $this setDefinition($definition)
 * @method string getDefinition()
 * @method $this setResultType($resultType)
 * @method string getResultType()
 * @method $this setPlayConfig($playConfig)
 * @method string getPlayConfig()
 */
class GetPlayInfo extends Request
{

}

/**
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method string getResourceRealOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setTimeMerge($timeMerge)
 * @method string getTimeMerge()
 * @method $this setInterval($interval)
 * @method string getInterval()
 * @method $this setLocationNameEn($locationNameEn)
 * @method string getLocationNameEn()
 * @method $this setIspNameEn($ispNameEn)
 * @method string getIspNameEn()
 */
class DescribeDomainBpsData extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setStartTimeUTC($startTimeUTC)
 * @method string getStartTimeUTC()
 * @method $this setEndTimeUTC($endTimeUTC)
 * @method string getEndTimeUTC()
 * @method $this setLevel($level)
 * @method string getLevel()
 * @method $this setDivision($division)
 * @method string getDivision()
 */
class GetMTSStatis extends Request
{

}

/**
 * @method $this setSearchType($searchType)
 * @method string getSearchType()
 * @method $this setFields($fields)
 * @method string getFields()
 * @method $this setMatch($match)
 * @method string getMatch()
 * @method $this setSortBy($sortBy)
 * @method string getSortBy()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setScrollToken($scrollToken)
 * @method string getScrollToken()
 * @method $this setSessionId($sessionId)
 * @method string getSessionId()
 * @method $this setResultTypes($resultTypes)
 * @method string getResultTypes()
 */
class SearchMedia extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setStorageRegion($storageRegion)
 * @method string getStorageRegion()
 * @method $this setPrefix($prefix)
 * @method string getPrefix()
 * @method $this setMaxKeys($maxKeys)
 * @method string getMaxKeys()
 */
class GetPersonalStorageList extends Request
{

}

/**
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setProduct($product)
 * @method string getProduct()
 * @method $this setLimit($limit)
 * @method int getLimit()
 */
class DescribeVodTopDomainsByFlow extends Request
{

}

/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setTranscodeTemplateList($transcodeTemplateList)
 * @method string getTranscodeTemplateList()
 * @method $this setTranscodeTemplateGroupId($transcodeTemplateGroupId)
 * @method string getTranscodeTemplateGroupId()
 */
class AddTranscodeTemplateGroup extends Request
{

}

/**
 * @method $this setCateId($cateId)
 * @method int getCateId()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setSortBy($sortBy)
 * @method string getSortBy()
 */
class GetCategories extends Request
{

}

/**
 * @method $this setDeleteImageType($deleteImageType)
 * @method string getDeleteImageType()
 * @method $this setImageURLs($imageURLs)
 * @method string getImageURLs()
 * @method $this setImageIds($imageIds)
 * @method string getImageIds()
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 * @method $this setImageType($imageType)
 * @method string getImageType()
 */
class DeleteImage extends Request
{

}

/**
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class GetAIMediaAuditJob extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 */
class GetAuditResultDetail extends Request
{

}

/**
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 */
class DescribePlayVideoStatis extends Request
{

}

/**
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribePlayUserAvg extends Request
{

}

/**
 * @method $this setVodTemplateId($vodTemplateId)
 * @method string getVodTemplateId()
 */
class DeleteVodTemplate extends Request
{

}

/**
 * @method $this setMediaMetaDatas($mediaMetaDatas)
 * @method string getMediaMetaDatas()
 * @method $this setTemplateGroupId($templateGroupId)
 * @method string getTemplateGroupId()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class CreateMedia extends Request
{

}

/**
 * @method $this setIsContainsTemplates($containTemplates)
 * @method bool getIsContainsTemplates()
 */
class ListTemplateGroup extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setPrivateOssAuth($privateOssAuth)
 * @method string getPrivateOssAuth()
 */
class SetL2OssKeyConfig extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setIspNameEn($ispName)
 * @method string getIspNameEn()
 * @method $this setLocationNameEn($locName)
 * @method string getLocationNameEn()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeVodDomainRealTimeQpsData extends Request
{

}

/**
 * @method $this setWatermarkId($watertempId)
 * @method string getWatermarkId()
 */
class SetDefaultWatermarkConsole extends Request
{

}

/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setTemplateIds($templateIds)
 * @method string getTemplateIds()
 */
class DeleteCustomTemplateConsole extends Request
{

}

/**
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method string getResourceRealOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setTimeMerge($timeMerge)
 * @method string getTimeMerge()
 * @method $this setInterval($interval)
 * @method string getInterval()
 * @method $this setLocationNameEn($locationNameEn)
 * @method string getLocationNameEn()
 * @method $this setIspNameEn($ispNameEn)
 * @method string getIspNameEn()
 */
class DescribeDomainFlowData extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeVodCertificateList extends Request
{

}

/**
 * @method $this setCertName($certName)
 * @method string getCertName()
 */
class DescribeVodCertificateDetail extends Request
{

}

/**
 * @method $this setStreamName($streamName)
 * @method string getStreamName()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setQueryType($queryType)
 * @method string getQueryType()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setSortBy($sortBy)
 * @method string getSortBy()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class ListLiveRecordVideo extends Request
{

}

/**
 * @method $this setPolicyNames($policyNames)
 * @method string getPolicyNames()
 */
class DeleteAppPolicy extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setAIVideoTagConfig($config)
 * @method string getAIVideoTagConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class SubmitAIVideoTagJob extends Request
{

}

/**
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 */
class GetAITemplate extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setAIVideoSummaryJobIds($jobIds)
 * @method string getAIVideoSummaryJobIds()
 */
class ListAIVideoSummaryJob extends Request
{

}

/**
 * @method $this setVideoType($videoType)
 * @method string getVideoType()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeUserAvgTimeByDay extends Request
{

}

/**
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setGroup($resourceGroupId)
 * @method string getGroup()
 * @method $this setDomainNames($domainName)
 * @method string getDomainNames()
 * @method $this setDimension($dimension)
 * @method string getDimension()
 * @method $this setTaskName($name)
 * @method string getTaskName()
 */
class CreateVodUserUsageDetailDataExportTask extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setStartTimeUTC($startTimeUTC)
 * @method string getStartTimeUTC()
 * @method $this setEndTimeUTC($endTimeUTC)
 * @method string getEndTimeUTC()
 * @method $this setLevel($level)
 * @method string getLevel()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setDivision($division)
 * @method string getDivision()
 */
class GetAIStatis extends Request
{

}

/**
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 * @method $this setPageNumber($pageIndex)
 * @method string getPageNumber()
 */
class DescribeVodUserUsageDetailDataExportTask extends Request
{

}

/**
 * @method $this setWorkflowId($workflowId)
 * @method string getWorkflowId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setActionList($actionList)
 * @method string getActionList()
 */
class UpdateWorkflow extends Request
{

}

/**
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 * @method $this setTemplateName($templateName)
 * @method string getTemplateName()
 * @method $this setTemplateConfig($templateConfig)
 * @method string getTemplateConfig()
 */
class UpdateAITemplate extends Request
{

}

/**
 * @method $this setVideoId($mediaId)
 * @method string getVideoId()
 * @method $this setSpecifiedOffsetTime($time)
 * @method int getSpecifiedOffsetTime()
 * @method $this setWidth($width)
 * @method string getWidth()
 * @method $this setHeight($height)
 * @method string getHeight()
 * @method $this setCount($num)
 * @method int getCount()
 * @method $this setInterval($interval)
 * @method int getInterval()
 * @method $this setSpriteSnapshotConfig($spriteConfig)
 * @method string getSpriteSnapshotConfig()
 * @method $this setSnapshotTemplateId($snapshotTemplateId)
 * @method string getSnapshotTemplateId()
 */
class SubmitSnapshotJob extends Request
{

}

/**
 * @method $this setSource($source)
 * @method string getSource()
 * @method $this setClientId($clientId)
 * @method string getClientId()
 * @method $this setBusinessType($businessType)
 * @method string getBusinessType()
 * @method $this setTerminalType($terminalType)
 * @method string getTerminalType()
 * @method $this setDeviceModel($deviceModel)
 * @method string getDeviceModel()
 * @method $this setAppVersion($appVersion)
 * @method string getAppVersion()
 * @method $this setAuthTimestamp($authTimestamp)
 * @method int getAuthTimestamp()
 * @method $this setAuthInfo($authInfo)
 * @method string getAuthInfo()
 * @method $this setUploadInfoList($uploadInfoList)
 * @method string getUploadInfoList()
 * @method $this setUserId($userId)
 * @method int getUserId()
 * @method $this setUploadAddress($uploadAddress)
 * @method string getUploadAddress()
 */
class GetUploadProgress extends Request
{

}

/**
 * @method $this setVodTemplateId($vodTemplateId)
 * @method string getVodTemplateId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setTemplateConfig($templateConfig)
 * @method string getTemplateConfig()
 */
class UpdateVodTemplate extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setStatus($state)
 * @method string getStatus()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setSortBy($sortBy)
 * @method string getSortBy()
 * @method $this setTitle($title)
 * @method string getTitle()
 */
class SearchEditingProject extends Request
{

}

/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class DeleteTemplateGroupConsole extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setAIVideoCategoryJobIds($jobIds)
 * @method string getAIVideoCategoryJobIds()
 */
class ListAIVideoCategoryJob extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setMaterialIds($materialIds)
 * @method string getMaterialIds()
 * @method $this setMaterialType($materialType)
 * @method string getMaterialType()
 */
class DeleteEditingProjectMaterials extends Request
{

}

/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setActionList($actionList)
 * @method string getActionList()
 */
class AddWorkflow extends Request
{

}

/**
 * @method $this setTranscodeTemplateGroupId($transcodeTemplateGroupId)
 * @method string getTranscodeTemplateGroupId()
 */
class GetTranscodeTemplateGroup extends Request
{

}

/**
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 */
class GetWatermarksConsole extends Request
{

}

/**
 * @method $this setData($data)
 * @method string getData()
 * @method $this setCookie($cookie)
 * @method string getCookie()
 */
class AssumeExperienceRole extends Request
{

}

/**
 * @method $this setUploadURLs($uploadURLs)
 * @method string getUploadURLs()
 * @method $this setTemplateGroupId($templateGroupId)
 * @method string getTemplateGroupId()
 * @method $this setStorageLocation($storageLocation)
 * @method string getStorageLocation()
 * @method $this setUploadMetadatas($uploadMetadatas)
 * @method string getUploadMetadatas()
 * @method $this setPriority($priority)
 * @method string getPriority()
 * @method $this setMessageCallback($messageCallback)
 * @method string getMessageCallback()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class UploadMediaByURL extends Request
{

}

/**
 * @method $this setChannel($channel)
 * @method string getChannel()
 * @method $this setClientTS($clientTS)
 * @method int getClientTS()
 * @method $this setClientVersion($clientVersion)
 * @method string getClientVersion()
 * @method $this setPlaySign($playSign)
 * @method string getPlaySign()
 * @method $this setSignVersion($signVersion)
 * @method string getSignVersion()
 * @method $this setVideoId($mediaId)
 * @method string getVideoId()
 */
class GetVideoPlayInfo extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class SetDefaultPlayDomain extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setAIVideoCategoryConfig($config)
 * @method string getAIVideoCategoryConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class SubmitAIVideoCategoryJob extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setIspNameEn($ispName)
 * @method string getIspNameEn()
 * @method $this setLocationNameEn($locName)
 * @method string getLocationNameEn()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeVodDomainRealTimeBpsData extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 */
class GetVideoDNAResult extends Request
{

}

/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setGroupSymbol($groupSymbol)
 * @method string getGroupSymbol()
 */
class SetDefaultTemplateGroupConsole extends Request
{

}

/**
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 */
class GetMediaAuditResultDetail extends Request
{

}

/**
 * @method $this setVideoType($videoType)
 * @method string getVideoType()
 * @method $this setBizdate($bizdate)
 * @method string getBizdate()
 */
class DescribeUserVvTopByDay extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setTypes($types)
 * @method string getTypes()
 */
class GetAIService extends Request
{

}

/**
 * @method $this setType($type)
 * @method string getType()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setWatermarkConfig($watermarkConfig)
 * @method string getWatermarkConfig()
 * @method $this setFileUrl($fileUrl)
 * @method string getFileUrl()
 */
class AddWatermark extends Request
{

}

/**
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 * @method $this setVideoInfo($videoInfo)
 * @method string getVideoInfo()
 * @method $this setMezzanineInfo($mezzanineInfo)
 * @method string getMezzanineInfo()
 * @method $this setStreamInfos($streamInfos)
 * @method string getStreamInfos()
 */
class TransferMediaData extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class GetDomain extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setProductCode($productCode)
 * @method string getProductCode()
 * @method $this setAPIProxyName($apiProxyName)
 * @method string getAPIProxyName()
 * @method $this setAPIProxyParam($apiProxyParam)
 * @method string getAPIProxyParam()
 */
class SetCDNForceRedirectConfig extends Request
{

}

/**
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setVideoId($mediaId)
 * @method string getVideoId()
 */
class GetTranscodeInfo extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setDomainType($domainType)
 * @method string getDomainType()
 * @method $this setEnableDomain($enableDomain)
 * @method bool getEnableDomain()
 * @method $this setSourceType($sourceType)
 * @method string getSourceType()
 * @method $this setSourcePort($sourcePort)
 * @method int getSourcePort()
 * @method $this setSources($sources)
 * @method string getSources()
 * @method $this setPlayRegion($playRegion)
 * @method string getPlayRegion()
 * @method $this setPriorities($priorities)
 * @method string getPriorities()
 */
class AddDomain extends Request
{

}

/**
 * @method $this setUserId($customerId)
 * @method string getUserId()
 */
class DeleteInitCustomTemplateInfo extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setWatermarkGroupName($watermarkGroupName)
 * @method string getWatermarkGroupName()
 */
class AddWatermarkGroup extends Request
{

}

/**
 * @method $this setUserId($userId)
 * @method int getUserId()
 */
class GetUserInfoInner extends Request
{

}

/**
 * @method $this setids($ids)
 * @method string getids()
 * @method $this setEncryptTemplayeIds($encryptIds)
 * @method string getEncryptTemplayeIds()
 */
class UpdateTranscodeConf extends Request
{

}

/**
 * @method $this setproduct($product)
 * @method string getproduct()
 * @method $this setversion($version)
 * @method string getversion()
 * @method $this setaction($action)
 * @method string getaction()
 * @method $this setregionId($regionId)
 * @method string getregionId()
 * @method $this setdomain($domain)
 * @method string getdomain()
 * @method $this setdata($data)
 * @method string getdata()
 */
class CompleteOrderParam extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class GetDomainSecurity extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class StartDomain extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setWatermarkGroupId($watermarkGroupId)
 * @method string getWatermarkGroupId()
 * @method $this setWatermarkGroupName($watermarkGroupName)
 * @method string getWatermarkGroupName()
 * @method $this setIsDefault($isDefault)
 * @method bool getIsDefault()
 */
class UpdateWatermarkGroup extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setStatus($states)
 * @method string getStatus()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setSortBy($sortBy)
 * @method string getSortBy()
 */
class GetEditingProjectList extends Request
{

}

/**
 * @method $this setVideoType($videoType)
 * @method string getVideoType()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeUserUvByDayTest extends Request
{

}

/**
 * @method $this setCustomerId($customerId)
 * @method int getCustomerId()
 * @method $this setTranscodeGroupId($transcodeGroupId)
 * @method string getTranscodeGroupId()
 * @method $this setStorageLocation($storageLocation)
 * @method string getStorageLocation()
 */
class QueryUploadInfo extends Request
{

}

/**
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setPolicyInfoList($policyInfoList)
 * @method string getPolicyInfoList()
 * @method $this setSource($source)
 * @method string getSource()
 * @method $this setAuthTimestamp($authTimestamp)
 * @method int getAuthTimestamp()
 * @method $this setAuthInfo($authInfo)
 * @method string getAuthInfo()
 */
class AddThirdPartPlayPolicy extends Request
{

}

/**
 * @method $this setTemplateIds($templateIds)
 * @method string getTemplateIds()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class UpdateAudioConfig extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setRefererIdList($refererIdList)
 * @method string getRefererIdList()
 */
class DeleteDomainReferer extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setRefererSwitch($refererSwitch)
 * @method string getRefererSwitch()
 * @method $this setAuthSwitch($authSwitch)
 * @method string getAuthSwitch()
 */
class SetDomainSecurity extends Request
{

}

/**
 * @method $this setCompanionResourceType($companionResourceType)
 * @method string getCompanionResourceType()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageNo($pageNo)
 * @method string getPageNo()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 */
class ListCompanionresourceInfo extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setWatermarkGroupId($watermarkGroupId)
 * @method string getWatermarkGroupId()
 * @method $this setWatermarkIds($watermarkIds)
 * @method string getWatermarkIds()
 */
class AddWatermarkRelation extends Request
{

}

/**
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 */
class GetAudioTemplate extends Request
{

}

/**
 * @method $this setUserId($userId)
 * @method int getUserId()
 */
class GetBucketListInner extends Request
{

}

/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class ListCustomTemplate extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setLevel($level)
 * @method string getLevel()
 */
class GetPlayStatis extends Request
{

}

/**
 * @method $this setFileUrl($fileUrl)
 * @method string getFileUrl()
 * @method $this setVideoId($mediaId)
 * @method string getVideoId()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setTags($tags)
 * @method string getTags()
 * @method $this setPrivilege($publicType)
 * @method int getPrivilege()
 * @method $this setPassword($password)
 * @method string getPassword()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setCoverURL($coverUrl)
 * @method string getCoverURL()
 * @method $this setCateId($cateId)
 * @method int getCateId()
 * @method $this setDuration($duration)
 * @method int getDuration()
 * @method $this setMediaWorkflowId($mediaWorkflowId)
 * @method string getMediaWorkflowId()
 * @method $this setMediaWorkflowUserData($mediaWorkflowUserData)
 * @method string getMediaWorkflowUserData()
 * @method $this setMediaWorkflowRunId($mediaWorkflowRunId)
 * @method string getMediaWorkflowRunId()
 */
class UpdateMediaInfo extends Request
{

}

/**
 * @method $this setUserId($userId)
 * @method int getUserId()
 * @method $this setFlushConfig($flushConfig)
 * @method bool getFlushConfig()
 */
class InitCustomerWorkFlow extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setFileType($fileType)
 * @method int getFileType()
 * @method $this setImageExt($imageExt)
 * @method string getImageExt()
 */
class GetUploadSTSToken extends Request
{

}

/**
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 */
class GetCustomTemplate extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setWatermarkGroupId($watermarkGroupId)
 * @method string getWatermarkGroupId()
 */
class DeleteWatermarkGroup extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setTag($tag)
 * @method string getTag()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 */
class AddVideoTag extends Request
{

}

/**
 * @method $this setTranscodeIds($transcodeIds)
 * @method string getTranscodeIds()
 * @method $this setEncryptTemplateIds($encryptIds)
 * @method string getEncryptTemplateIds()
 * @method $this setCustomerId($customerId)
 * @method string getCustomerId()
 */
class UpdateSpecifyCustomerTemplateConfig extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setProductCode($productCode)
 * @method string getProductCode()
 * @method $this setAPIProxyName($apiProxyName)
 * @method string getAPIProxyName()
 * @method $this setAPIProxyParam($apiProxyParam)
 * @method string getAPIProxyParam()
 */
class DescribeCDNRefreshTasks extends Request
{

}

/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setVideo($video)
 * @method string getVideo()
 * @method $this setAudio($audio)
 * @method string getAudio()
 * @method $this setTransConfig($transConfig)
 * @method string getTransConfig()
 * @method $this setMuxConfig($muxConfig)
 * @method string getMuxConfig()
 * @method $this setContainer($container)
 * @method string getContainer()
 * @method $this setDefinition($definition)
 * @method string getDefinition()
 * @method $this setUseWaterMark($useWaterMark)
 * @method string getUseWaterMark()
 * @method $this setEncrypt($encrypt)
 * @method string getEncrypt()
 * @method $this setCondition($templateCondition)
 * @method string getCondition()
 * @method $this setNarrowBand($narrowBand)
 * @method string getNarrowBand()
 */
class AddCustomTemplate extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setCateId($cateId)
 * @method string getCateId()
 */
class UpdateMediaCategory extends Request
{

}

/**
 * @method $this setTime($time)
 * @method string getTime()
 * @method $this setHeight($height)
 * @method string getHeight()
 * @method $this setWidth($width)
 * @method string getWidth()
 * @method $this setNumber($num)
 * @method string getNumber()
 */
class AddSnapshot extends Request
{

}

/**
 * @method $this setCodec($codec)
 * @method string getCodec()
 * @method $this setBitrate($bitrate)
 * @method string getBitrate()
 * @method $this setChannel($channel)
 * @method string getChannel()
 * @method $this setRemove($remove)
 * @method string getRemove()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setMuxer($muxer)
 * @method string getMuxer()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setIsDefault($isDefault)
 * @method string getIsDefault()
 */
class AddAudioTemplate extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setInterrupt($interrupt)
 * @method bool getInterrupt()
 * @method $this setInvoker($invoker)
 * @method string getInvoker()
 * @method $this setPk($pk)
 * @method string getPk()
 * @method $this setBid($bid)
 * @method string getBid()
 * @method $this setHid($hid)
 * @method int getHid()
 * @method $this setCountry($country)
 * @method string getCountry()
 * @method $this setTaskIdentifier($taskIdentifier)
 * @method string getTaskIdentifier()
 * @method $this setTaskExtraData($taskExtraData)
 * @method string getTaskExtraData()
 * @method $this setGmtWakeup($gmtWakeup)
 * @method string getGmtWakeup()
 * @method $this setSuccess($success)
 * @method bool getSuccess()
 * @method $this setMessage($message)
 * @method string getMessage()
 */
class SPILogicalDeleteResourceAction extends Request
{

}

/**
 * @method $this setVideoId($mediaId)
 * @method string getVideoId()
 */
class RefreshUploadToken extends Request
{

}

/**
 * @method $this setStatus($isOpen)
 * @method string getStatus()
 */
class SwitchWatermark extends Request
{

}

/**
 * @method $this setSignVersion($signVersion)
 * @method string getSignVersion()
 * @method $this setChannel($channel)
 * @method string getChannel()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 */
class GetPlayChannelKey extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setTag($tag)
 * @method string getTag()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 */
class DeleteVideoTag extends Request
{

}

/**
 * @method $this setUserId($customerId)
 * @method string getUserId()
 */
class DeleteCustomTemplateAndGroup extends Request
{

}

/**
 * @method $this setWatermarkIds($watermarkIds)
 * @method string getWatermarkIds()
 * @method $this setDelEmptyGroup($delEmptyGroup)
 * @method string getDelEmptyGroup()
 */
class DeleteWatermarkInfo extends Request
{

}

/**
 * @method $this setTime($time)
 * @method string getTime()
 * @method $this setHeight($height)
 * @method string getHeight()
 * @method $this setWidth($width)
 * @method string getWidth()
 * @method $this setNumber($num)
 * @method string getNumber()
 * @method $this setInterval($interval)
 * @method string getInterval()
 * @method $this setSnapshotId($snapshotId)
 * @method string getSnapshotId()
 */
class UpdateSnapshot extends Request
{

}

/**
 * @method $this setCustomerId($customerId)
 * @method string getCustomerId()
 */
class RefreshWorkFlow extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setYkVid($ykVid)
 * @method string getYkVid()
 */
class GetMidYKVid extends Request
{

}

/**
 * @method $this setState($state)
 * @method int getState()
 * @method $this setExpireTime($expireTime)
 * @method string getExpireTime()
 * @method $this setSignVersion($signVersion)
 * @method string getSignVersion()
 * @method $this setChannel($channel)
 * @method string getChannel()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setClientVersion($clientVersion)
 * @method string getClientVersion()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 */
class UpdateApiAuth extends Request
{

}

/**
 * @method $this setCustomerId($customerId)
 * @method int getCustomerId()
 * @method $this setAccountId($accountId)
 * @method int getAccountId()
 * @method $this setContractNo($contractNo)
 * @method string getContractNo()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setBundleId($bundleId)
 * @method string getBundleId()
 * @method $this setPackageName($packageName)
 * @method string getPackageName()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setSdkIds($sdkIds)
 * @method string getSdkIds()
 * @method $this setFeature($feature)
 * @method string getFeature()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setStartCreationTime($startCreationTime)
 * @method string getStartCreationTime()
 * @method $this setEndCreationTime($endCreationTime)
 * @method string getEndCreationTime()
 * @method $this setStartExpiredTime($startExpiredTime)
 * @method string getStartExpiredTime()
 * @method $this setEndExpiredTime($endExpiredTime)
 * @method string getEndExpiredTime()
 * @method $this setSortBy($sortBy)
 * @method string getSortBy()
 */
class GetAppLicenseList extends Request
{

}

/**
 * @method $this setCompanionResourceIds($companionResourceIds)
 * @method string getCompanionResourceIds()
 */
class DeleteCompanionresourceInfo extends Request
{

}

/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setVideo($video)
 * @method string getVideo()
 * @method $this setAudio($audio)
 * @method string getAudio()
 * @method $this setTransConfig($transConfig)
 * @method string getTransConfig()
 * @method $this setMuxConfig($muxConfig)
 * @method string getMuxConfig()
 * @method $this setContainer($container)
 * @method string getContainer()
 * @method $this setDefinition($definition)
 * @method string getDefinition()
 * @method $this setUseWaterMark($useWaterMark)
 * @method string getUseWaterMark()
 * @method $this setEncrypt($encrypt)
 * @method string getEncrypt()
 * @method $this setCondition($templateCondition)
 * @method string getCondition()
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 * @method $this setNarrowBand($narrowBand)
 * @method string getNarrowBand()
 */
class UpdateCustomTemplate extends Request
{

}

/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class SetDefaultTemplateGroup extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setdata($data)
 * @method string getdata()
 */
class NotifyProduce extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setUserId($userId)
 * @method int getUserId()
 */
class GetDomainAuthInner extends Request
{

}

/**
 * @method $this setVideoId($mediaId)
 * @method string getVideoId()
 * @method $this setstatus($state)
 * @method string getstatus()
 */
class UpdateVideoStatus extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDomainType($domainType)
 * @method string getDomainType()
 * @method $this setUserId($userId)
 * @method int getUserId()
 */
class GetDomainListInner extends Request
{

}

/**
 * @method $this setMuxer($muxer)
 * @method string getMuxer()
 * @method $this setResolution($resolution)
 * @method string getResolution()
 * @method $this setDetail($detail)
 * @method string getDetail()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setVideoBitrate($videoBitrate)
 * @method string getVideoBitrate()
 * @method $this setVideoCodec($videoCodec)
 * @method string getVideoCodec()
 * @method $this setAudioBitrate($audioBitrate)
 * @method string getAudioBitrate()
 * @method $this setAudioCodec($audioCodec)
 * @method string getAudioCodec()
 */
class UpdateTranscodeTemplate extends Request
{

}

/**
 * @method $this setCodec($codec)
 * @method string getCodec()
 * @method $this setBitrate($bitrate)
 * @method string getBitrate()
 * @method $this setChannel($channel)
 * @method string getChannel()
 * @method $this setRemove($remove)
 * @method string getRemove()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setMuxer($muxer)
 * @method string getMuxer()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setIsDefault($isDefault)
 * @method string getIsDefault()
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 */
class UpdateAudioTemplate extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setdata($data)
 * @method string getdata()
 */
class QueryOrderParam extends Request
{

}

/**
 * @method $this setVideoId($mediaId)
 * @method string getVideoId()
 * @method $this setstatus($state)
 * @method string getstatus()
 */
class UpdateMediaInfoStatus extends Request
{

}

/**
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setConfigs($configs)
 * @method string getConfigs()
 */
class UpdateCustomTemplateAndGroup extends Request
{

}

/**
 * @method $this setproduct($product)
 * @method string getproduct()
 * @method $this setversion($version)
 * @method string getversion()
 * @method $this setaction($action)
 * @method string getaction()
 * @method $this setregionId($regionId)
 * @method string getregionId()
 * @method $this setdomain($domain)
 * @method string getdomain()
 * @method $this setdata($data)
 * @method string getdata()
 */
class Modify extends Request
{

}

/**
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setContractNo($contractNo)
 * @method string getContractNo()
 * @method $this setBundleId($bundleId)
 * @method string getBundleId()
 * @method $this setPackageName($packageName)
 * @method string getPackageName()
 * @method $this setLicenseSignature($signature)
 * @method string getLicenseSignature()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setFeature($feature)
 * @method string getFeature()
 * @method $this setExpiredOn($expiredOn)
 * @method string getExpiredOn()
 * @method $this setSdkIds($sdkIds)
 * @method string getSdkIds()
 * @method $this setCustomerId($customerId)
 * @method int getCustomerId()
 * @method $this setAccountId($accountId)
 * @method int getAccountId()
 * @method $this setLicenseId($licenseId)
 * @method int getLicenseId()
 * @method $this setCreateTime($createTime)
 * @method string getCreateTime()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class AddAppLicense extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class StopDomain extends Request
{

}

/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setTemplateIds($templateIds)
 * @method string getTemplateIds()
 */
class DeleteCustomTemplate extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class GetWatermarkGroup extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setProjectIds($editingProjectIds)
 * @method string getProjectIds()
 * @method $this setStatus($state)
 * @method string getStatus()
 */
class UpdateEditingProjectStatus extends Request
{

}

/**
 * @method $this setJobId($jobId)
 * @method string getJobId()
 * @method $this setPlayURL($playURL)
 * @method string getPlayURL()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 */
class GetMediaStream extends Request
{

}

/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setPropertyName($propertyName)
 * @method string getPropertyName()
 * @method $this setPropertyValue($propertyValue)
 * @method string getPropertyValue()
 */
class SetTemplateGroupProperty extends Request
{

}

/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class DeleteTemplateGroup extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setInterrupt($interrupt)
 * @method bool getInterrupt()
 * @method $this setInvoker($invoker)
 * @method string getInvoker()
 * @method $this setPk($pk)
 * @method string getPk()
 * @method $this setBid($bid)
 * @method string getBid()
 * @method $this setHid($hid)
 * @method int getHid()
 * @method $this setCountry($country)
 * @method string getCountry()
 * @method $this setTaskIdentifier($taskIdentifier)
 * @method string getTaskIdentifier()
 * @method $this setTaskExtraData($taskExtraData)
 * @method string getTaskExtraData()
 * @method $this setGmtWakeup($gmtWakeup)
 * @method string getGmtWakeup()
 * @method $this setSuccess($success)
 * @method bool getSuccess()
 * @method $this setMessage($message)
 * @method string getMessage()
 * @method $this setLevel($level)
 * @method int getLevel()
 * @method $this setUrl($url)
 * @method string getUrl()
 * @method $this setPrompt($prompt)
 * @method string getPrompt()
 */
class SPICheckResourceAction extends Request
{

}

/**
 * @method $this setproduct($product)
 * @method string getproduct()
 * @method $this setversion($version)
 * @method string getversion()
 * @method $this setaction($action)
 * @method string getaction()
 * @method $this setregionId($regionId)
 * @method string getregionId()
 * @method $this setdomain($domain)
 * @method string getdomain()
 * @method $this setdata($data)
 * @method string getdata()
 */
class PayOrderCallback extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setReferType($referType)
 * @method string getReferType()
 * @method $this setReferList($referList)
 * @method string getReferList()
 * @method $this setAllowEmpty($allowEmpty)
 * @method string getAllowEmpty()
 */
class SetCDNReferer extends Request
{

}

/**
 * @method $this setWatermarkId($watermarkId)
 * @method string getWatermarkId()
 */
class GetWatermarkInfo extends Request
{

}

/**
 * @method $this setVideoIds($mediaIdStr)
 * @method string getVideoIds()
 */
class DeleteMediaInfo extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setTag($tag)
 * @method string getTag()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 */
class AddMediaTag extends Request
{

}

/**
 * @method $this setCustomerId($customerId)
 * @method string getCustomerId()
 */
class RefreshMaterialWorkFlow extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class UserExist extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setYkVid($ykVid)
 * @method string getYkVid()
 */
class DeleteMidYKVid extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setProductCode($productCode)
 * @method string getProductCode()
 * @method $this setAPIProxyName($apiProxyName)
 * @method string getAPIProxyName()
 * @method $this setAPIProxyParam($apiProxyParam)
 * @method string getAPIProxyParam()
 */
class SetCDNDomainServerCertificate extends Request
{

}

/**
 * @method $this setMuxer($muxer)
 * @method string getMuxer()
 * @method $this setResolution($resolution)
 * @method string getResolution()
 * @method $this setDetail($detail)
 * @method string getDetail()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setVideoBitrate($videoBitrate)
 * @method string getVideoBitrate()
 * @method $this setVideoCodec($videoCodec)
 * @method string getVideoCodec()
 * @method $this setAudioBitrate($audioBitrate)
 * @method string getAudioBitrate()
 * @method $this setAudioCodec($audioCodec)
 * @method string getAudioCodec()
 */
class AddTranscodeTemplate extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setNewAccountAkId($newAccountAkId)
 * @method string getNewAccountAkId()
 * @method $this setNewAccountAkSecret($newAccountAkSecret)
 * @method string getNewAccountAkSecret()
 * @method $this setNewAccountUserId($newAccountUserId)
 * @method int getNewAccountUserId()
 * @method $this setNewAccountLoginName($newAccountLoginName)
 * @method string getNewAccountLoginName()
 * @method $this setNewAccountRegionId($newAccountRegionId)
 * @method string getNewAccountRegionId()
 * @method $this setMaxBucketLimit($maxBucketLimit)
 * @method int getMaxBucketLimit()
 * @method $this setCommands($commands)
 * @method string getCommands()
 */
class AddProductAccount extends Request
{

}

/**
 * @method $this setCustomerId($customerId)
 * @method int getCustomerId()
 * @method $this setStreamName($streamName)
 * @method string getStreamName()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setTranscodeGroupId($transcodeGroupId)
 * @method string getTranscodeGroupId()
 * @method $this setResourceInfo($resourceInfo)
 * @method string getResourceInfo()
 * @method $this setFileUrl($fileUrl)
 * @method string getFileUrl()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setTags($tags)
 * @method string getTags()
 */
class AddLiveStreamVideo extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 */
class NotifyInitResource extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setUserList($userList)
 * @method string getUserList()
 */
class AddAuthCheckWhiteList extends Request
{

}

/**
 * @method $this setCateId($cateId)
 * @method int getCateId()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setKeyWord($keyWord)
 * @method string getKeyWord()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setSortBy($sortBy)
 * @method string getSortBy()
 * @method $this setStatus($state)
 * @method string getStatus()
 */
class SearchMediaInfo extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setPayType($payType)
 * @method string getPayType()
 * @method $this setBillType($billType)
 * @method string getBillType()
 * @method $this setChargeDuration($chargeDuration)
 * @method string getChargeDuration()
 * @method $this setOrderType($orderType)
 * @method string getOrderType()
 */
class InitVodService extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setCateId($cateId)
 * @method int getCateId()
 * @method $this setStatus($states)
 * @method string getStatus()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setSortBy($sortBy)
 * @method string getSortBy()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setSource($source)
 * @method string getSource()
 */
class GetMaterialList extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setProductCode($productCode)
 * @method string getProductCode()
 * @method $this setAPIProxyName($apiProxyName)
 * @method string getAPIProxyName()
 * @method $this setAPIProxyParam($apiProxyParam)
 * @method string getAPIProxyParam()
 */
class APIProxy extends Request
{

}

/**
 * @method $this setCateId($cateId)
 * @method int getCateId()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setKeyWord($keyWord)
 * @method string getKeyWord()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setSortBy($sortBy)
 * @method string getSortBy()
 * @method $this setStatus($state)
 * @method string getStatus()
 * @method $this setMediaType($type)
 * @method string getMediaType()
 * @method $this setResultTypes($resultTypes)
 * @method string getResultTypes()
 * @method $this setPlayRand($playRand)
 * @method string getPlayRand()
 * @method $this setSource($source)
 * @method string getSource()
 * @method $this setApiVersion($version)
 * @method string getApiVersion()
 * @method $this setScrollToken($lastItem)
 * @method string getScrollToken()
 * @method $this setPreprocessStatus($preprocessStatus)
 * @method string getPreprocessStatus()
 * @method $this setStorageLocation($storageLocation)
 * @method string getStorageLocation()
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 */
class SearchVideo extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setRefererType($refererType)
 * @method string getRefererType()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListDomainReferer extends Request
{

}

/**
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setVideoIds($videoIds)
 * @method string getVideoIds()
 * @method $this setFormats($formats)
 * @method string getFormats()
 * @method $this setAuthTimeout($authTimeout)
 * @method int getAuthTimeout()
 * @method $this setRand($rand)
 * @method string getRand()
 * @method $this setAuthInfo($authInfo)
 * @method string getAuthInfo()
 * @method $this setChannel($channel)
 * @method string getChannel()
 * @method $this setPlayerVersion($playerVersion)
 * @method string getPlayerVersion()
 * @method $this setOutputType($outputType)
 * @method string getOutputType()
 * @method $this setStreamType($streamType)
 * @method string getStreamType()
 * @method $this setReAuthInfo($reAuthInfo)
 * @method string getReAuthInfo()
 */
class GetBatchPlayInfo extends Request
{

}

/**
 * @method $this setFileUrl($fileUrl)
 * @method string getFileUrl()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setTags($tags)
 * @method string getTags()
 * @method $this setPrivilege($publicType)
 * @method int getPrivilege()
 * @method $this setIP($createIp)
 * @method string getIP()
 * @method $this setFileSize($fileSize)
 * @method int getFileSize()
 * @method $this setDuration($duration)
 * @method int getDuration()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setFileMd5($fileMd5)
 * @method string getFileMd5()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setCoverURL($coverUrl)
 * @method string getCoverURL()
 * @method $this setCateId($cateId)
 * @method int getCateId()
 * @method $this setMediaWorkflowId($mediaWorkflowId)
 * @method string getMediaWorkflowId()
 * @method $this setMediaWorkflowUserData($mediaWorkflowUserData)
 * @method string getMediaWorkflowUserData()
 * @method $this setMediaWorkflowRunId($mediaWorkflowRunId)
 * @method string getMediaWorkflowRunId()
 */
class AddMediaInfo extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setRefererType($refererType)
 * @method string getRefererType()
 * @method $this setRefererList($refererList)
 * @method string getRefererList()
 */
class AddDomainReferer extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setKey1($key1)
 * @method string getKey1()
 * @method $this setKey2($key2)
 * @method string getKey2()
 * @method $this setTimeout($timeout)
 * @method string getTimeout()
 */
class SetDomainAuth extends Request
{

}

/**
 * @method $this setCustomerId($customerId)
 * @method string getCustomerId()
 */
class AddPipeline extends Request
{

}

/**
 * @method $this setState($state)
 * @method int getState()
 * @method $this setPlayKey($apiKey)
 * @method string getPlayKey()
 * @method $this setExpireTime($expireTime)
 * @method string getExpireTime()
 * @method $this setSignVersion($signVersion)
 * @method string getSignVersion()
 * @method $this setChannel($channel)
 * @method string getChannel()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setClientVersion($clientVersion)
 * @method string getClientVersion()
 * @method $this setSource($source)
 * @method string getSource()
 */
class AddApiAuth extends Request
{

}

/**
 * @method $this setChannel($channel)
 * @method string getChannel()
 * @method $this setClientTS($clientTS)
 * @method int getClientTS()
 * @method $this setClientVersion($clientVersion)
 * @method string getClientVersion()
 * @method $this setPlaySign($playSign)
 * @method string getPlaySign()
 * @method $this setSignVersion($signVersion)
 * @method string getSignVersion()
 * @method $this setVideoId($mediaId)
 * @method string getVideoId()
 */
class GetVideoPlayInfoForCloud extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setWatermarkGroupId($watermarkGroupId)
 * @method string getWatermarkGroupId()
 * @method $this setWatermarkIds($watermarkIds)
 * @method string getWatermarkIds()
 */
class DeleteWatermarkRelation extends Request
{

}

/**
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class GetTemplateGroup extends Request
{

}

/**
 * @method $this setUserId($customerId)
 * @method int getUserId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setWorkFlowId($workFlowId)
 * @method string getWorkFlowId()
 */
class InitCustomerWithSystemTemplateAndGroup extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeCdnRefreshQuota extends Request
{

}

/**
 * @method $this setWatermarkType($watermarkType)
 * @method string getWatermarkType()
 * @method $this setWatermarkConfig($watermarkConfig)
 * @method string getWatermarkConfig()
 * @method $this setWatermarkId($watermarkId)
 * @method string getWatermarkId()
 * @method $this setMediaFileId($watermarkFileId)
 * @method string getMediaFileId()
 * @method $this setWatermarkName($watermarkName)
 * @method string getWatermarkName()
 */
class UpdateWatermarkInfo extends Request
{

}

/**
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setConfigs($configs)
 * @method string getConfigs()
 */
class AddCustomTemplateAndGroup extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setCommand($command)
 * @method string getCommand()
 */
class ControlVodService extends Request
{

}

/**
 * @method $this setUserId($customerId)
 * @method int getUserId()
 */
class InitSystemTemplateGroup extends Request
{

}

/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class GetDomainAuth extends Request
{

}

/**
 * @method $this setLicenseId($licenseId)
 * @method int getLicenseId()
 * @method $this setContractNo($contractNo)
 * @method string getContractNo()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setBundleId($bundleId)
 * @method string getBundleId()
 * @method $this setPackageName($packageName)
 * @method string getPackageName()
 * @method $this setLicenseSignature($signature)
 * @method string getLicenseSignature()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setFeature($feature)
 * @method string getFeature()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setExpiredOn($expiredOn)
 * @method string getExpiredOn()
 * @method $this setSdkIds($sdkIds)
 * @method string getSdkIds()
 * @method $this setCustomerId($customerId)
 * @method int getCustomerId()
 * @method $this setAccountId($accountId)
 * @method int getAccountId()
 */
class UpdateAppLicense extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DeleteDomain extends Request
{

}

/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setToNeedTranscode($toNeedTranscode)
 * @method string getToNeedTranscode()
 */
class AddTemplateGroup extends Request
{

}

/**
 * @method $this setCateId($cateId)
 * @method int getCateId()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setSortBy($sortBy)
 * @method string getSortBy()
 */
class GetMediaInfoList extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setKmsRegionId($kmsRegionId)
 * @method string getKmsRegionId()
 */
class CreateKMSServiceKey extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setFileUrl($fileUrl)
 * @method string getFileUrl()
 * @method $this setSnapshot($snapshot)
 * @method string getSnapshot()
 */
class ReleaseFile extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class ListCertificate extends Request
{

}

/**
 * @method $this setCompanionResourceId($companionResourceId)
 * @method string getCompanionResourceId()
 */
class GetCompanionresourceInfo extends Request
{

}

/**
 * @method $this setWatermarkType($watermarkType)
 * @method string getWatermarkType()
 * @method $this setWatermarkConfig($watermarkConfig)
 * @method string getWatermarkConfig()
 * @method $this setWatermarkName($watermarkName)
 * @method string getWatermarkName()
 * @method $this setMediaFileId($watermarkFileId)
 * @method string getMediaFileId()
 */
class AddWatermarkInfo extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setInterrupt($interrupt)
 * @method bool getInterrupt()
 * @method $this setInvoker($invoker)
 * @method string getInvoker()
 * @method $this setPk($pk)
 * @method string getPk()
 * @method $this setBid($bid)
 * @method string getBid()
 * @method $this setHid($hid)
 * @method int getHid()
 * @method $this setCountry($country)
 * @method string getCountry()
 * @method $this setTaskIdentifier($taskIdentifier)
 * @method string getTaskIdentifier()
 * @method $this setTaskExtraData($taskExtraData)
 * @method string getTaskExtraData()
 * @method $this setGmtWakeup($gmtWakeup)
 * @method string getGmtWakeup()
 * @method $this setSuccess($success)
 * @method bool getSuccess()
 * @method $this setMessage($message)
 * @method string getMessage()
 */
class SPIPhysicalDeleteResourceAction extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setMaterialIds($materialIds)
 * @method string getMaterialIds()
 * @method $this setStatus($state)
 * @method string getStatus()
 */
class UpdateMaterialStatus extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ListAllCategory extends Request
{

}

/**
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setContentId($contentId)
 * @method string getContentId()
 * @method $this setSource($source)
 * @method string getSource()
 * @method $this setAuthTimestamp($authTimestamp)
 * @method int getAuthTimestamp()
 * @method $this setAuthInfo($authInfo)
 * @method string getAuthInfo()
 */
class GetThirdPartPlayPolicy extends Request
{

}

/**
 * @method $this setWatermarkType($watermarkType)
 * @method string getWatermarkType()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageNo($pageNo)
 * @method string getPageNo()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 */
class ListWatermarkInfo extends Request
{

}

/**
 * @method $this setTemplateIds($templateIds)
 * @method string getTemplateIds()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class AddAudioConfig extends Request
{

}

/**
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 */
class DeleteAudioTemplate extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CategoryTree extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setUserList($userList)
 * @method string getUserList()
 */
class InitEditing extends Request
{

}

/**
 * @method $this setLicenseId($licenseId)
 * @method int getLicenseId()
 */
class GetAppLicense extends Request
{

}

/**
 * @method $this setState($state)
 * @method int getState()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 */
class GetPlayChannelList extends Request
{

}

/**
 * @method $this setTemplateGroupId($groupId)
 * @method string getTemplateGroupId()
 * @method $this setUserId($userId)
 * @method int getUserId()
 * @method $this setIsLocked($locked)
 * @method string getIsLocked()
 * @method $this setGroupName($name)
 * @method string getGroupName()
 */
class UpdateTemplateGroupDaemon extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 */
class GetServiceStatus extends Request
{

}

/**
 * @method $this setCustomerId($customerId)
 * @method int getCustomerId()
 * @method $this setStreamName($streamName)
 * @method string getStreamName()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setAutoCompose($autoCompose)
 * @method string getAutoCompose()
 * @method $this setTranscodeGroupId($transcodeGroupId)
 * @method string getTranscodeGroupId()
 */
class FinishLiveStreamRecord extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method string getResourceRealOwnerId()
 */
class OpenService extends Request
{

}

/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setToNeedTranscode($toNeedTranscode)
 * @method string getToNeedTranscode()
 */
class UpdateTemplateGroup extends Request
{

}

/**
 * @method $this setVideoIds($mediaIds)
 * @method string getVideoIds()
 * @method $this setCheckStatus($checkState)
 * @method string getCheckStatus()
 * @method $this setCheckReason($checkReason)
 * @method string getCheckReason()
 */
class CheckVideo extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setTag($tag)
 * @method string getTag()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 */
class DeleteMediaTag extends Request
{

}

/**
 * @method $this setSdkCode($sdkCode)
 * @method int getSdkCode()
 * @method $this setLicenseVersion($licenseVersion)
 * @method int getLicenseVersion()
 * @method $this setPlatform($platform)
 * @method int getPlatform()
 * @method $this setBundleId($bundleId)
 * @method string getBundleId()
 * @method $this setPackageName($packageName)
 * @method string getPackageName()
 * @method $this setLicenseSignature($signature)
 * @method string getLicenseSignature()
 * @method $this setNonce($nonce)
 * @method string getNonce()
 * @method $this setTime($time)
 * @method int getTime()
 * @method $this setSign($sign)
 * @method string getSign()
 * @method $this setSdkVersion($sdkVersion)
 * @method string getSdkVersion()
 * @method $this setSdkVersionCode($sdkVersionCode)
 * @method int getSdkVersionCode()
 */
class AuthorizeAppLicense extends Request
{

}

/**
 * @method $this setVideoId($mediaId)
 * @method string getVideoId()
 */
class GetMediaInfo extends Request
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setYKCloudVid($ykCloudVid)
 * @method string getYKCloudVid()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setYKVideoId($ykVideoId)
 * @method string getYKVideoId()
 */
class AddMidYKVid extends Request
{

}

