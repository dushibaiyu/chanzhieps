<?php
/**
 * The article category zh-cn file of chanzhiEPS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPLV12 (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     article
 * @version     $Id$
 * @link        http://www.chanzhi.org
 */
$lang->article->setting     = 'Setting';
$lang->article->common      = 'Article';
$lang->article->createDraft = 'Create draft';

$lang->article->id         = 'Id';
$lang->article->category   = 'Categories';
$lang->article->categories = 'Categories';
$lang->article->title      = 'Title';
$lang->article->alias      = 'English alias';
$lang->article->content    = 'Content';
$lang->article->source     = 'Source';
$lang->article->copySite   = 'Site';
$lang->article->copyURL    = 'URL';
$lang->article->keywords   = 'Keywords';
$lang->article->summary    = 'Summary';
$lang->article->author     = 'Author';
$lang->article->editor     = 'Editor';
$lang->article->addedDate  = 'Added';
$lang->article->editedDate = 'Edited';
$lang->article->status     = 'Status';
$lang->article->type       = 'Type';
$lang->article->views      = 'Views';
$lang->article->comments   = 'Comments';
$lang->article->stick      = 'Sticky';
$lang->article->order      = 'Order';
$lang->article->isLink     = 'Locate';
$lang->article->link       = 'Link';
$lang->article->css        = 'CSS';
$lang->article->js         = 'JS';

$lang->article->forward2Blog     = 'Forward to blog';
$lang->article->forward2Forum    = 'Forward to forum';
$lang->article->selectCategories = 'Select categories';
$lang->article->selectBoard      = 'Select board';

$lang->article->publish = 'Publish';
$lang->article->reject  = 'Reject';

$lang->article->contributionStatus = new stdclass;
$lang->article->contributionStatus->status[1] = '<span class="label label-xsm label-primary">' . 'Moderated' .'</span>';
$lang->article->contributionStatus->status[2] = '<span class="label label-xsm label-success">' . 'Approved' . '</span>';
$lang->article->contributionStatus->status[3] = '<span class="label label-xsm label-warning">' . 'Not Approved' . '</span>';

$lang->article->list       = 'List';
$lang->article->admin      = 'Admin';
$lang->article->create     = 'Create';
$lang->article->setcss     = 'Set CSS';
$lang->article->setjs      = 'Set JS';
$lang->article->edit       = 'Edit';
$lang->article->files      = 'Files';
$lang->article->images     = 'Images';

$lang->article->contribution    = 'Contribution';
$lang->article->submissionTime  = 'Submission Time';

$lang->article->contributionOptions = new stdclass;
$lang->article->contributionOptions->open  = 'Open';
$lang->article->contributionOptions->close = 'Close';

$lang->blog->admin  = 'Admin';
$lang->blog->list   = 'List';
$lang->blog->create = 'Create';
$lang->blog->edit   = 'Edit';

$lang->page->admin  = 'Admin';
$lang->page->list   = 'List';
$lang->page->create = 'Create';
$lang->page->edit   = 'Edit';

$lang->article->sourceList['original']      = 'Original';
$lang->article->sourceList['copied']        = 'Copied';
$lang->article->sourceList['translational'] = 'Translational';
$lang->article->sourceList['article']       = 'Forwarded from article';

$lang->article->statusList['normal'] = 'Normal';
$lang->article->statusList['draft']  = 'Draft';

$lang->article->sticks[0] = 'unstick';
$lang->article->sticks[1] = 'stick in category';
$lang->article->sticks[2] = 'stick';

$lang->article->successStick   = 'Stick successfully';
$lang->article->successUnstick = 'Unstick successfully';

$lang->article->confirmDelete = 'Are you sure to delete this article?';

$lang->article->lblAddedDate = '<strong>Added:</strong> %s &nbsp;&nbsp;';
$lang->article->lblAuthor    = "<strong>Author:</strong> %s &nbsp;&nbsp;";
$lang->article->lblSource    = '<strong>Source:</strong>';
$lang->article->lblViews     = ' <strong>Views:</strong>%s';
$lang->article->lblEditor    = 'Edited by %s at %s';
$lang->article->lblComments  = '<strong>Comments:</strong> %s';

$lang->article->none      = 'None';
$lang->article->previous  = 'Previous';
$lang->article->next      = 'Next';
$lang->article->directory = 'List';
$lang->article->noCssTag  = 'No &lt;style&gt;&lt;/style&gt; tag';
$lang->article->noJsTag   = 'No &lt;script&gt;&lt;/script&gt; tag';

$lang->article->placeholder = new stdclass();
$lang->article->placeholder->addedDate = 'Support delay publishing of article';
$lang->article->placeholder->link      = 'Input link, it can be outer chain.';

$lang->article->approveMessage = 'Your contribution <strong>《%s》</strong> has been approved，award <strong>+%s</strong> scores.';
$lang->article->rejectMessage  = 'Your contribution <strong>《%s》</strong> has not been approved, you can edit it, then submit it for review again.';

$lang->article->forwardFrom = 'Fowarding from';
