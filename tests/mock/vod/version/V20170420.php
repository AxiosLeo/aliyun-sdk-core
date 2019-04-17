<?php

namespace aliyun\sdk\tests\mock\vod\version20170420;

use aliyun\sdk\tests\mock\vod\VodAction;

/**
 * Class V20170420
 * @package aliyun\sdk\tests\mock\vod\version20170420
 * @method AddCategory AddCategory()
 * @method GetImageUploadAuth GetImageUploadAuth()
 * @method GetVideoInfo GetVideoInfo()
 * @method GetCategoryList GetCategoryList()
 * @method GetVideoList GetVideoList()
 * @method DeleteCategory DeleteCategory()
 * @method GetDomainList GetDomainList()
 * @method DeleteVideo DeleteVideo()
 * @method UpdateCategoryName UpdateCategoryName()
 * @method GetVideoPlayAuth GetVideoPlayAuth()
 * @method GetCategoryTree GetCategoryTree()
 * @method CreateUploadVideo CreateUploadVideo()
 * @method UpdateVideoInfo UpdateVideoInfo()

 */
class V20170420
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
class AddCategory extends VodAction
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setFileType($fileType)
 * @method int getFileType()
 */
class GetImageUploadAuth extends VodAction
{

}

/**
 * @method $this setVideoId($mediaId)
 * @method string getVideoId()
 */
class GetVideoInfo extends VodAction
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class GetCategoryList extends VodAction
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
class GetVideoList extends VodAction
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setCateId($cateId)
 * @method string getCateId()
 */
class DeleteCategory extends VodAction
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class GetDomainList extends VodAction
{

}

/**
 * @method $this setVideoIds($mediaIdStr)
 * @method string getVideoIds()
 */
class DeleteVideo extends VodAction
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
class UpdateCategoryName extends VodAction
{

}

/**
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 */
class GetVideoPlayAuth extends VodAction
{

}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class GetCategoryTree extends VodAction
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
class CreateUploadVideo extends VodAction
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
class UpdateVideoInfo extends VodAction
{

}

