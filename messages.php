<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once "includes/app_up_nav.php";
require_once "includes/functions.php";
require_once "includes/timeToSec.php";
?>
<style>

    .chat-list-item-location a{
        text-align: right;
        background-image: url("images/icons/ic_location_on_black_18dp.png");
        background-position: center;
        background-repeat: no-repeat;
        background-size: auto;
    }
    #chat-main-list{

    }
    .chat-list-item{
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
        align-items: center;
        list-style: none;
        margin: 0px !important;
        padding: 0px 2px 0px 0px !important;
        border-bottom: 1px #ddd;
        height:52px;

    }
    .chat-list-item:active, .chat-list-item:hover{
        background-color: #fff;
        color: #cccccc;
        cursor: pointer;
    }
    .chat-list-item > li{
        font-size: 14px;
    }

    .chat-list-item > li.chat-list-item-metas{
        width:73%;
    }
    .chat-list-item > li.chat-list-item-notif{
        width:10%;
    }
    .chat-list-item > li.chat-list-item-avatar{
        width:17%;
    }
    .name-meta{
        font-size: 14px;
        font-weight: bold;
    }
    .message-meta{
        font-size: 12px;
        font-weight: lighter;

    }
    .chat-header-avatar img.avatar-icon {
        border-radius: 50%;
        height: 49px;
        width: 49px;
    }
    .chat-header-options-more{
        visibility: hidden;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        transition: all 2s ease-in;
        transition-delay: .5s;
        transition-timing-function: ease-in-out;
    }
    .options-more:hover{
        background-color: whitesmoke    
    }
    .chat-header-options-dropdown{
        visibility: hidden;
        width: 200px;
        padding-left: 0px;
        top:46px;
        right: 8px;
        z-index: 100;
        position: absolute;
        list-style: none;
        background-color: white;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: flex-start;
        box-shadow: 0px 0px 2px 2px rgba(0,0,0,0.1);
        transition: all 2s ease-in-out;
        transition-timing-function: ease-in-out;
    }
    .chat-header-options-dropdown li{
        width:100%;
        padding: 2px 2px 2px 6px; 
    }
    .chat-header-options-dropdown li:hover{
        background-color: #337AB7;
        color: white;
    }
    .chat-header-options img{
        margin:0px 5px;
        width: 24px;
        height: 24px;
    }

    .chat-divider{
        height: 24px;
    }
    div.chat-header{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        padding: 0px 6px 0px 12px;
        align-items: center;
        height: 56px;
        background-color: #fff
    }
    div.chat-header>div{
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
        align-items: center;
    }

    div.chat-body{
        min-height: calc(100% - 92px);
        background-color: #cccccc;
        overflow-y: auto;
        display: flex;
        flex-direction: column;

        padding: 10px 0px;
    }
    .main-content>div{
        height: inherit;
    }
    div.chat-area{
        min-height:36px;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;

        width: 100%;

        padding:0px 6px 0px 6px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555;

        background-image: none;
        -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    }
    .addmessagerecip{
        width: 56px;
        height: 56px;
        background-color: #cccccc;
        display: flex;
        justify-content: center;
        align-items: center;
        -webkit-transition: background-color ease-in-out .15s;
        -o-transition: background-color ease-in-out .15s;
        transition:background-color ease-in-out .15s;
        cursor: pointer;
    }
    .addmessagerecip:hover{
        background-color: #ffffff;

    }
    .dropdown img{
        width: 24px;
        height: 24px;

    }
    div.chat-area div#addmedia{
        border-top-left-radius: 6px;
        border-bottom-left-radius: 6px;
        padding: 6px;
        background-color: #428bca;
    }
    div.chat-area div#addemoji{
        padding: 6px;
        background-color: #f5f5f5
    }
    div.chat-area div#sendmessage{
        border-top-right-radius: 6px;
        border-bottom-right-radius: 6px;
        padding: 6px;
        background-color: #428bca;
    }
    div.chat-area>input{
        width: 100%;
        height: 36px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555;
        background-color: #fff;

        border: none;
    }
    ul#addmediaDialog{
        visibility: hidden;

        width: auto;
        height: 150px;
        z-index: 0;
        position: absolute;
        background-color: #337AB7;
        border-top-left-radius: 6px;
        border-bottom-left-radius: 6px;
        bottom: 0px;
        -webkit-box-shadow: 0 -1px 1px rgba(0,0,0,.075);
        box-shadow: 0 -1px 1px rgba(0,0,0,.075);
        -webkit-transition: bottom 0.3s ease ;
        transition: bottom 0.3s ease;
    }
    #addmediaDialog{
        margin: 0px !important;
        padding: 6px !important;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: flex-start;
        list-style: none;
    }
    ul#addmediaDialog>li {
        background-color: #337AB7;
    }

    ul#addmediaDialog>li>input{
        height: 24px;
        margin: 0px !important;
        padding: 0px !important;
        border: none;
        background-color: #337AB7;
        color: #fff;
    }
    div.details{
        width: calc(100% - 365px);
        margin: 0px;
        padding: 12px 0px 12px 12px; 
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        background-color: #cccccc;
        overflow-y: auto;
        overflow-x: hidden
    }
    .chat-message{
        width:100%;
        margin: 4px auto;
        padding: 5px 7px;
        border-radius: 4px;
        min-height:48px;
        height: auto;
        max-height: 400px;
        overflow-y: auto;
        background-color: white;

    }
    div#chat-details{
        width: calc(100% - 300px);
        height: 100%;
        margin: 0px;
        padding: 0px 0px 4px 0px; 
        display: flex;
        background-color: #cccccc;
        flex-direction: column;
        justify-content: flex-start;
        overflow-y: auto;
        overflow-x: hidden
    }
    ul.new-chat-modal{
        visibility: hidden;
        width: 300px;
        height: 100%;
        position:absolute;
        z-index:1050;
        overflow:hidden;
        -webkit-overflow-scrolling:touch;
        outline:0;
        background-color: white;
        list-style: none;
        left: -300px;
        -webkit-transition: left 0.3s ease ;
        transition: left 0.3s ease;
        animation-timing-function: ease-in-out;
    }
    ul.new-chat-modal-body{
        overflow-y: auto;
        overflow-x: hidden;
        padding: 5px 5px 5px 5px;
    }
    ul.page-info{
        list-style: none
    }
    div.main-info{
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
        align-items: flex-start;
        margin: 10px 0px;
        padding: 0px;
    }
    #boo-det-profile, .boo-det-profile{
        width: 150px;
        height: 150px;
        background-color: #008080;
    }
    ul.boo-det-info{
        list-style: none;
    }
    ul.boo-det-info> li{
        padding-bottom: 4px;
    }
    ul#boo-det-gallery{
        padding: 5px 5px 0px 5px;
        margin-bottom: 0;
        list-style: none;
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
        align-items: flex-start;
        flex-wrap: wrap;
    }
    #boo-det-gallery li{
        padding: 10px 5px;
    }
    .gallery-img{
        width: 70px;
        height: 70px;
        background-color: #008080;
    }
    /*chat bubble */
    .chat-bubble.right{
        display: flex;
        flex-direction: row-reverse;
        justify-content: flex-start;
        align-items: flex-start;


    }
    .chat-bubble{
        width: 100%;
        min-width: 136px;
        margin:2px 0px;
        padding: 6px;
        min-height: 40px; 
        transition: all .5s ease-in-out;
        transition-timing-function: ease
    }
    .chat-bubble.left{
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
        align-items: flex-start;
    }
    .bubble-select{
        display: none;
        align-self: center;
        width:16px;
        height: 16px;
        padding: 4px!important;
        transition: display .5s ease-in-out;
        transition-timing-function: ease;
    }
    .bubble-img{
        width: 48px;
        height: 48px;
        border-radius: 50%;
        margin:0px 4px 0px 4px;
    }
    .bubble-content{
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: flex-start;
        max-width: 50%;
        padding: 5px;
        min-height: 40px;
        background-color: #428bca;
        border-radius: 3px;
    }

    .bubble-content p{
        max-width: 95%;
        text-align: left;
        padding:0px;
        margin: 0px;
        line-height: 1.2;
        word-break: break-all;
        line-break: strict
    }
    .bubble-extra{
        background-color: #428bca;
        padding-left: 4px;
        padding-right: 4px;
        align-self: flex-end;
    }
    .chat-bubble.left{
        float: left;
    }
    .chat-bubble.right{
        float: right
    }
    body{
        height: 100%;
        overflow-y: auto;
        background-color: #f9fbe7;
    }

</style>
<input type="hidden" id="main_page_carousel" />
<input type="hidden" value="<?php echo "" . $id_xxxccc88; ?>" id="common_user_settings_the_id" />
<input type="hidden" id="main_page_2017_" />
<div class="main-content">
    <div class="container-fluid">
        <div id="panel1" class="col-md-3">
            <div class="messagepanel" id="mainpageMessage">
                <ul class="list-inline nav nav-tabs nav-justified">
                    <li class="active"><a data-toggle="pill" href="#queries">Queries</a></li>
                    <li><a data-toggle="pill" href="#suggestions">Suggestions</a></li>
                </ul>
                <div class="tab-content">
                    <div id="queries" class="tab-pane fade in active">
                        <div  id="" >
                            <div  style="font-size: 14px;" id="queries_data_msgs">
                                <?php
                                $theUserId = $_SESSION["ogenius_nds_user_id_x2309999_990"];
                                ?>

                            </div> </div>
                        <div style="clear: both;">

                            <nav><ul id="queries_data_msgs_pagesn" class="pagination trend">
                                    <?php
                                    if (!empty($total_pages)):for ($i = 1; $i <= $total_pages; $i++):
                                            if ($i == 1):
                                                ?>
                                                <li class='active'  id="<?php echo $i; ?>"><a href='paginate/home_gallery_batch_images_paginate_through.php?page=<?php echo $i; ?>'><?php echo $i; ?></a></li>
                                            <?php else: ?>
                                                <li id="<?php echo $i; ?>"><a href='paginate/home_gallery_batch_images_paginate_through.php?page=<?php echo $i; ?>'><?php echo $i; ?></a></li>
                                            <?php endif; ?>
                                            <?php
                                        endfor;
                                    endif;
                                    ?>
                                </ul></nav></div>
                        <?php
                        //-----------all items
                        $total_records = $database->num_rows($database->query("SELECT * FROM  ogenius_nds_db_rgb_query
        WHERE  ogenius_nds_db_rgb_query_query_provider='{$theUserId}'
        ORDER BY  ogenius_nds_db_rgb_query_id  DESC"));
                        $limit = "5";
                        ?>
                        <script >
                        </script>
                        <script src="greatest_pagination/libs/bootstrap.js" ></script>
                        <script src="greatest_pagination/libs/jquery-3.2.1.js"></script>
                        <link type="text/css" href="greatest_pagination/libs/simplePagination.css"/>
                        <script>
                            (function ($) {

                                var methods = {
                                    init: function (options) {
                                        var o = $.extend({
                                            items: 1,
                                            itemsOnPage: 1,
                                            pages: 0,
                                            displayedPages: 5,
                                            edges: 2,
                                            currentPage: 1,
                                            hrefTextPrefix: '#page-',
                                            hrefTextSuffix: '',
                                            prevText: 'Prev',
                                            nextText: 'Next',
                                            ellipseText: '&hellip;',
                                            cssStyle: 'light-theme',
                                            labelMap: [],
                                            selectOnClick: true,
                                            onPageClick: function (pageNumber, event) {
                                                // Callback triggered when a page is clicked
                                                // Page number is given as an optional parameter
                                            },
                                            onInit: function () {
                                                // Callback triggered immediately after initialization
                                            }
                                        }, options || {});

                                        var self = this;

                                        o.pages = o.pages ? o.pages : Math.ceil(o.items / o.itemsOnPage) ? Math.ceil(o.items / o.itemsOnPage) : 1;
                                        o.currentPage = o.currentPage - 1;
                                        o.halfDisplayed = o.displayedPages / 2;

                                        this.each(function () {
                                            self.addClass(o.cssStyle + ' simple-pagination').data('pagination', o);
                                            methods._draw.call(self);
                                        });

                                        o.onInit();

                                        return this;
                                    },
                                    selectPage: function (page) {
                                        methods._selectPage.call(this, page - 1);
                                        return this;
                                    },
                                    prevPage: function () {
                                        var o = this.data('pagination');
                                        if (o.currentPage > 0) {
                                            methods._selectPage.call(this, o.currentPage - 1);
                                        }
                                        return this;
                                    },
                                    nextPage: function () {
                                        var o = this.data('pagination');
                                        if (o.currentPage < o.pages - 1) {
                                            methods._selectPage.call(this, o.currentPage + 1);
                                        }
                                        return this;
                                    },
                                    getPagesCount: function () {
                                        return this.data('pagination').pages;
                                    },
                                    getCurrentPage: function () {
                                        return this.data('pagination').currentPage + 1;
                                    },
                                    destroy: function () {
                                        this.empty();
                                        return this;
                                    },
                                    drawPage: function (page) {
                                        var o = this.data('pagination');
                                        o.currentPage = page - 1;
                                        this.data('pagination', o);
                                        methods._draw.call(this);
                                        return this;
                                    },
                                    redraw: function () {
                                        methods._draw.call(this);
                                        return this;
                                    },
                                    disable: function () {
                                        var o = this.data('pagination');
                                        o.disabled = true;
                                        this.data('pagination', o);
                                        methods._draw.call(this);
                                        return this;
                                    },
                                    enable: function () {
                                        var o = this.data('pagination');
                                        o.disabled = false;
                                        this.data('pagination', o);
                                        methods._draw.call(this);
                                        return this;
                                    },
                                    updateItems: function (newItems) {
                                        var o = this.data('pagination');
                                        o.items = newItems;
                                        o.pages = methods._getPages(o);
                                        this.data('pagination', o);
                                        methods._draw.call(this);
                                    },
                                    updateItemsOnPage: function (itemsOnPage) {
                                        var o = this.data('pagination');
                                        o.itemsOnPage = itemsOnPage;
                                        o.pages = methods._getPages(o);
                                        this.data('pagination', o);
                                        methods._selectPage.call(this, 0);
                                        return this;
                                    },
                                    _draw: function () {
                                        var o = this.data('pagination'),
                                                interval = methods._getInterval(o),
                                                i,
                                                tagName;

                                        methods.destroy.call(this);

                                        tagName = (typeof this.prop === 'function') ? this.prop('tagName') : this.attr('tagName');

                                        var $panel = tagName === 'UL' ? this : $('<ul></ul>').appendTo(this);

                                        // Generate Prev link
                                        if (o.prevText) {
                                            methods._appendItem.call(this, o.currentPage - 1, {text: o.prevText, classes: 'prev'});
                                        }

                                        // Generate start edges
                                        if (interval.start > 0 && o.edges > 0) {
                                            var end = Math.min(o.edges, interval.start);
                                            for (i = 0; i < end; i++) {
                                                methods._appendItem.call(this, i);
                                            }
                                            if (o.edges < interval.start && (interval.start - o.edges != 1)) {
                                                $panel.append('<li class="disabled"><span class="ellipse">' + o.ellipseText + '</span></li>');
                                            } else if (interval.start - o.edges == 1) {
                                                methods._appendItem.call(this, o.edges);
                                            }
                                        }

                                        // Generate interval links
                                        for (i = interval.start; i < interval.end; i++) {
                                            methods._appendItem.call(this, i);
                                        }

                                        // Generate end edges
                                        if (interval.end < o.pages && o.edges > 0) {
                                            if (o.pages - o.edges > interval.end && (o.pages - o.edges - interval.end != 1)) {
                                                $panel.append('<li class="disabled"><span class="ellipse">' + o.ellipseText + '</span></li>');
                                            } else if (o.pages - o.edges - interval.end == 1) {
                                                methods._appendItem.call(this, interval.end++);
                                            }
                                            var begin = Math.max(o.pages - o.edges, interval.end);
                                            for (i = begin; i < o.pages; i++) {
                                                methods._appendItem.call(this, i);
                                            }
                                        }

                                        // Generate Next link
                                        if (o.nextText) {
                                            methods._appendItem.call(this, o.currentPage + 1, {text: o.nextText, classes: 'next'});
                                        }
                                    },
                                    _getPages: function (o) {
                                        var pages = Math.ceil(o.items / o.itemsOnPage);
                                        return pages || 1;
                                    },
                                    _getInterval: function (o) {
                                        return {
                                            start: Math.ceil(o.currentPage > o.halfDisplayed ? Math.max(Math.min(o.currentPage - o.halfDisplayed, (o.pages - o.displayedPages)), 0) : 0),
                                            end: Math.ceil(o.currentPage > o.halfDisplayed ? Math.min(o.currentPage + o.halfDisplayed, o.pages) : Math.min(o.displayedPages, o.pages))
                                        };
                                    },
                                    _appendItem: function (pageIndex, opts) {
                                        var self = this, options, $link, o = self.data('pagination'), $linkWrapper = $('<li></li>'), $ul = self.find('ul');

                                        pageIndex = pageIndex < 0 ? 0 : (pageIndex < o.pages ? pageIndex : o.pages - 1);

                                        options = {
                                            text: pageIndex + 1,
                                            classes: ''
                                        };

                                        if (o.labelMap.length && o.labelMap[pageIndex]) {
                                            options.text = o.labelMap[pageIndex];
                                        }

                                        options = $.extend(options, opts || {});

                                        if (pageIndex == o.currentPage || o.disabled) {
                                            if (o.disabled) {
                                                $linkWrapper.addClass('disabled');
                                            } else {
                                                $linkWrapper.addClass('active');
                                            }
                                            $link = $('<span class="current">' + (options.text) + '</span>');
                                        } else {
                                            $link = $('<a href="' + o.hrefTextPrefix + (pageIndex + 1) + o.hrefTextSuffix + '" class="page-link">' + (options.text) + '</a>');
                                            $link.click(function (event) {
                                                return methods._selectPage.call(self, pageIndex, event);
                                            });
                                        }

                                        if (options.classes) {
                                            $link.addClass(options.classes);
                                        }

                                        $linkWrapper.append($link);

                                        if ($ul.length) {
                                            $ul.append($linkWrapper);
                                        } else {
                                            self.append($linkWrapper);
                                        }
                                    },
                                    _selectPage: function (pageIndex, event) {
                                        var o = this.data('pagination');
                                        o.currentPage = pageIndex;
                                        if (o.selectOnClick) {
                                            methods._draw.call(this);
                                        }
                                        return o.onPageClick(pageIndex + 1, event);
                                    }

                                };

                                $.fn.pagination = function (method) {

                                    // Method calling logic
                                    if (methods[method] && method.charAt(0) != '_') {
                                        return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
                                    } else if (typeof method === 'object' || !method) {
                                        return methods.init.apply(this, arguments);
                                    } else {
                                        $.error('Method ' + method + ' does not exist on jQuery.pagination');
                                    }

                                };

                            })(jQuery);
                            $(document).ready(function () {
                                setTimeout(function () {
                                    $('#queries_data_msgs_pagesn').pagination({
                                        items: <?php echo $total_records; ?>
                                        ,
                                        itemsOnPage:
<?php echo $limit; ?>
                                        , cssStyle: 'light-theme',
                                        currentPage: 1,
                                        onPageClick: function (pageNumber) {
                                            jQuery("#queries_data_msgs").html('loading...');
                                            jQuery("#queries_data_msgs").load("paginate/nds_messages_for_queries.php?page=" + pageNumber + "&userId=" +<?php echo $theUserId; ?>);
                                        }, onInit: function () {
                                            jQuery("#queries_data_msgs").html('loading...');
                                            jQuery("#queries_data_msgs").load("paginate/nds_messages_for_queries.php?page=1" + "&userId=" +<?php echo $theUserId; ?>);
                                        }
                                    });

                                }, 100);



                            });
                        </script>

                    </div>
                    <div id="suggestions" class="tab-pane fade in">
                        <div  id="">
                            <div  style="font-size: 14px;" id="suggestions_data_msgs">
                                <?php
                                $theUserId = $_SESSION["ogenius_nds_user_id_x2309999_990"];
                                ?>

                            </div> </div>
                        <div style="clear: both;">

                            <nav><ul id="suggestions_data_msgs_pagesn" class="pagination trend">
                                    <?php
                                    if (!empty($total_pages)):for ($i = 1; $i <= $total_pages; $i++):
                                            if ($i == 1):
                                                ?>
                                                <li class='active'  id="<?php echo $i; ?>"><a href='paginate/home_gallery_batch_images_paginate_through.php?page=<?php echo $i; ?>'><?php echo $i; ?></a></li>
                                            <?php else: ?>
                                                <li id="<?php echo $i; ?>"><a href='paginate/home_gallery_batch_images_paginate_through.php?page=<?php echo $i; ?>'><?php echo $i; ?></a></li>
                                            <?php endif; ?>
                                            <?php
                                        endfor;
                                    endif;
                                    ?>
                                </ul></nav></div>
                        <?php
                        //-----------all items
                        $total_records_ = $database->num_rows($database->query("SELECT * FROM  ogenius_nds_db_suggestions
        WHERE  ogenius_nds_db_suggestions_provider_id='{$theUserId}'
        ORDER BY  ogenius_nds_db_suggestions_id  DESC"));
                        $limit_ = "5";
                        ?>
                        <script >
                        </script>
                        <script src="greatest_pagination/libs/bootstrap.js" ></script>
                        <script src="greatest_pagination/libs/jquery-3.2.1.js"></script>
                        <link type="text/css" href="greatest_pagination/libs/simplePagination.css"/>
                        <script>
                            (function ($) {

                                var methods = {
                                    init: function (options) {
                                        var o = $.extend({
                                            items: 1,
                                            itemsOnPage: 1,
                                            pages: 0,
                                            displayedPages: 5,
                                            edges: 2,
                                            currentPage: 1,
                                            hrefTextPrefix: '#page-',
                                            hrefTextSuffix: '',
                                            prevText: 'Prev',
                                            nextText: 'Next',
                                            ellipseText: '&hellip;',
                                            cssStyle: 'light-theme',
                                            labelMap: [],
                                            selectOnClick: true,
                                            onPageClick: function (pageNumber, event) {
                                                // Callback triggered when a page is clicked
                                                // Page number is given as an optional parameter
                                            },
                                            onInit: function () {
                                                // Callback triggered immediately after initialization
                                            }
                                        }, options || {});

                                        var self = this;

                                        o.pages = o.pages ? o.pages : Math.ceil(o.items / o.itemsOnPage) ? Math.ceil(o.items / o.itemsOnPage) : 1;
                                        o.currentPage = o.currentPage - 1;
                                        o.halfDisplayed = o.displayedPages / 2;

                                        this.each(function () {
                                            self.addClass(o.cssStyle + ' simple-pagination').data('pagination', o);
                                            methods._draw.call(self);
                                        });

                                        o.onInit();

                                        return this;
                                    },
                                    selectPage: function (page) {
                                        methods._selectPage.call(this, page - 1);
                                        return this;
                                    },
                                    prevPage: function () {
                                        var o = this.data('pagination');
                                        if (o.currentPage > 0) {
                                            methods._selectPage.call(this, o.currentPage - 1);
                                        }
                                        return this;
                                    },
                                    nextPage: function () {
                                        var o = this.data('pagination');
                                        if (o.currentPage < o.pages - 1) {
                                            methods._selectPage.call(this, o.currentPage + 1);
                                        }
                                        return this;
                                    },
                                    getPagesCount: function () {
                                        return this.data('pagination').pages;
                                    },
                                    getCurrentPage: function () {
                                        return this.data('pagination').currentPage + 1;
                                    },
                                    destroy: function () {
                                        this.empty();
                                        return this;
                                    },
                                    drawPage: function (page) {
                                        var o = this.data('pagination');
                                        o.currentPage = page - 1;
                                        this.data('pagination', o);
                                        methods._draw.call(this);
                                        return this;
                                    },
                                    redraw: function () {
                                        methods._draw.call(this);
                                        return this;
                                    },
                                    disable: function () {
                                        var o = this.data('pagination');
                                        o.disabled = true;
                                        this.data('pagination', o);
                                        methods._draw.call(this);
                                        return this;
                                    },
                                    enable: function () {
                                        var o = this.data('pagination');
                                        o.disabled = false;
                                        this.data('pagination', o);
                                        methods._draw.call(this);
                                        return this;
                                    },
                                    updateItems: function (newItems) {
                                        var o = this.data('pagination');
                                        o.items = newItems;
                                        o.pages = methods._getPages(o);
                                        this.data('pagination', o);
                                        methods._draw.call(this);
                                    },
                                    updateItemsOnPage: function (itemsOnPage) {
                                        var o = this.data('pagination');
                                        o.itemsOnPage = itemsOnPage;
                                        o.pages = methods._getPages(o);
                                        this.data('pagination', o);
                                        methods._selectPage.call(this, 0);
                                        return this;
                                    },
                                    _draw: function () {
                                        var o = this.data('pagination'),
                                                interval = methods._getInterval(o),
                                                i,
                                                tagName;

                                        methods.destroy.call(this);

                                        tagName = (typeof this.prop === 'function') ? this.prop('tagName') : this.attr('tagName');

                                        var $panel = tagName === 'UL' ? this : $('<ul></ul>').appendTo(this);

                                        // Generate Prev link
                                        if (o.prevText) {
                                            methods._appendItem.call(this, o.currentPage - 1, {text: o.prevText, classes: 'prev'});
                                        }

                                        // Generate start edges
                                        if (interval.start > 0 && o.edges > 0) {
                                            var end = Math.min(o.edges, interval.start);
                                            for (i = 0; i < end; i++) {
                                                methods._appendItem.call(this, i);
                                            }
                                            if (o.edges < interval.start && (interval.start - o.edges != 1)) {
                                                $panel.append('<li class="disabled"><span class="ellipse">' + o.ellipseText + '</span></li>');
                                            } else if (interval.start - o.edges == 1) {
                                                methods._appendItem.call(this, o.edges);
                                            }
                                        }

                                        // Generate interval links
                                        for (i = interval.start; i < interval.end; i++) {
                                            methods._appendItem.call(this, i);
                                        }

                                        // Generate end edges
                                        if (interval.end < o.pages && o.edges > 0) {
                                            if (o.pages - o.edges > interval.end && (o.pages - o.edges - interval.end != 1)) {
                                                $panel.append('<li class="disabled"><span class="ellipse">' + o.ellipseText + '</span></li>');
                                            } else if (o.pages - o.edges - interval.end == 1) {
                                                methods._appendItem.call(this, interval.end++);
                                            }
                                            var begin = Math.max(o.pages - o.edges, interval.end);
                                            for (i = begin; i < o.pages; i++) {
                                                methods._appendItem.call(this, i);
                                            }
                                        }

                                        // Generate Next link
                                        if (o.nextText) {
                                            methods._appendItem.call(this, o.currentPage + 1, {text: o.nextText, classes: 'next'});
                                        }
                                    },
                                    _getPages: function (o) {
                                        var pages = Math.ceil(o.items / o.itemsOnPage);
                                        return pages || 1;
                                    },
                                    _getInterval: function (o) {
                                        return {
                                            start: Math.ceil(o.currentPage > o.halfDisplayed ? Math.max(Math.min(o.currentPage - o.halfDisplayed, (o.pages - o.displayedPages)), 0) : 0),
                                            end: Math.ceil(o.currentPage > o.halfDisplayed ? Math.min(o.currentPage + o.halfDisplayed, o.pages) : Math.min(o.displayedPages, o.pages))
                                        };
                                    },
                                    _appendItem: function (pageIndex, opts) {
                                        var self = this, options, $link, o = self.data('pagination'), $linkWrapper = $('<li></li>'), $ul = self.find('ul');

                                        pageIndex = pageIndex < 0 ? 0 : (pageIndex < o.pages ? pageIndex : o.pages - 1);

                                        options = {
                                            text: pageIndex + 1,
                                            classes: ''
                                        };

                                        if (o.labelMap.length && o.labelMap[pageIndex]) {
                                            options.text = o.labelMap[pageIndex];
                                        }

                                        options = $.extend(options, opts || {});

                                        if (pageIndex == o.currentPage || o.disabled) {
                                            if (o.disabled) {
                                                $linkWrapper.addClass('disabled');
                                            } else {
                                                $linkWrapper.addClass('active');
                                            }
                                            $link = $('<span class="current">' + (options.text) + '</span>');
                                        } else {
                                            $link = $('<a href="' + o.hrefTextPrefix + (pageIndex + 1) + o.hrefTextSuffix + '" class="page-link">' + (options.text) + '</a>');
                                            $link.click(function (event) {
                                                return methods._selectPage.call(self, pageIndex, event);
                                            });
                                        }

                                        if (options.classes) {
                                            $link.addClass(options.classes);
                                        }

                                        $linkWrapper.append($link);

                                        if ($ul.length) {
                                            $ul.append($linkWrapper);
                                        } else {
                                            self.append($linkWrapper);
                                        }
                                    },
                                    _selectPage: function (pageIndex, event) {
                                        var o = this.data('pagination');
                                        o.currentPage = pageIndex;
                                        if (o.selectOnClick) {
                                            methods._draw.call(this);
                                        }
                                        return o.onPageClick(pageIndex + 1, event);
                                    }

                                };

                                $.fn.pagination = function (method) {

                                    // Method calling logic
                                    if (methods[method] && method.charAt(0) != '_') {
                                        return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
                                    } else if (typeof method === 'object' || !method) {
                                        return methods.init.apply(this, arguments);
                                    } else {
                                        $.error('Method ' + method + ' does not exist on jQuery.pagination');
                                    }

                                };

                            })(jQuery);
                            $(document).ready(function () {
                                setTimeout(function () {
                                    $('#suggestions_data_msgs_pagesn').pagination({
                                        items: <?php echo $total_records_; ?>
                                        ,
                                        itemsOnPage:
<?php echo $limit_; ?>
                                        , cssStyle: 'light-theme',
                                        currentPage: 1,
                                        onPageClick: function (pageNumber) {
                                            jQuery("#suggestions_data_msgs").html('loading...');
                                            jQuery("#suggestions_data_msgs").load("paginate/nds_messages_for_suggestions.php?page=" + pageNumber + "&userId=" +<?php echo $theUserId; ?>);
                                        }, onInit: function () {
                                            jQuery("#suggestions_data_msgs").html('loading...');
                                            jQuery("#suggestions_data_msgs").load("paginate/nds_messages_for_suggestions.php?page=1" + "&userId=" +<?php echo $theUserId; ?>);
                                        }
                                    });

                                }, 100);



                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <div id="panel2" class="col-md-9" style="min-height: 100%; overflow-y: hidden">
            
        </div>
    </div>
</div>



</body>
</html>
