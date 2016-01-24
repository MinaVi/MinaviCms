{include file="common/header.tpl"}
{assign var="base" value="/minavicms/"}

<div class="container-fluid">
    <div class="row-fluid">
        <div class="span3">
            <div class="well sidebar-nav">
                <ul class="nav nav-list">
                    <li class="nav-header">Sidebar</li>
                    <li><a href="#">Link</a></li>
                </ul>
            </div><!--well -->
        </div><!--/span-->

        <form action="{$base}Kmlaccept/index" method="post" class="form-horizontal" enctype="multipart/form-data" >

            <div class="span9">
                <?php echo validation_errors('title'); ?>
                <input type="file" name="kmlfile">
                <p><input type="submit" value="決定！" class="btn btn-primary btn-large"></p>
            </div><!--/span-->
        </form>
    </div><!--/row-fluid-->
</div><!--/container-fluid-->

{*
{include file="common/footer.tpl"}
*}
