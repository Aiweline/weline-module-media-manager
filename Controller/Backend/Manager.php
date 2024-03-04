<?php
declare(strict_types=1);

/*
 * 本文件由 秋枫雁飞 编写，所有解释权归Aiweline所有。
 * 作者：Administrator
 * 邮箱：aiweline@qq.com
 * 网址：aiweline.com
 * 论坛：https://bbs.aiweline.com
 * 日期：4/3/2024 10:11:21
 */

namespace Weline\MediaManager\Controller\Backend;

use Weline\Framework\Acl\Acl;
use Weline\Framework\App\Controller\BackendController;

#[Acl('Weline_MediaManager::manager', '媒体管理', 'mdi mdi-file-tree', '管理媒体资源', 'Weline_MediaManager::main')]
class Manager extends BackendController
{
    #[Acl('Weline_MediaManager::listing', '媒体管理', 'mdi mdi-file-tree', '管理媒体资源')]
    function index()
    {
        $this->assign('title', '媒体管理');
        return $this->fetch();
    }
}