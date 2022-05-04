<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
    <body>
 
                <tbody><tr>
                    <td class="field-name"><label for="title">Заголовок:</label></td>
                </tr>
                <tr>
                    <td><input style="box-sizing: border-box; width: 100%;" id="title" name="title" value=""></td>
                </tr>

                <tr>
                    <td class="field-name">
                        <label for="content">Содержимое:</label>
                        <div class="notice" style="float: right;font-size:smaller">Используйте [cut] (на отдельной строке) для определения места разрыва между сокращенной и полной версией</div>
                    </td>
                </tr>
                <tr>
                    <td><div class="miu-complete"><div id="markItUpContent" class="markItUp"><div class="markItUpContainer"><div class="markItUpHeader"><ul><li class="markItUpButton markItUpButton1 "><a href="" accesskey="1" title="First Level Heading [Ctrl+1]">First Level Heading</a></li><li class="markItUpButton markItUpButton2 "><a href="" accesskey="2" title="Second Level Heading [Ctrl+2]">Second Level Heading</a></li><li class="markItUpButton markItUpButton3 "><a href="" accesskey="3" title="Heading 3 [Ctrl+3]">Heading 3</a></li><li class="markItUpButton markItUpButton4 "><a href="" accesskey="4" title="Heading 4 [Ctrl+4]">Heading 4</a></li><li class="markItUpSeparator">---------------</li><li class="markItUpButton markItUpButton5 "><a href="" accesskey="B" title="Bold [Ctrl+B]">Bold</a></li><li class="markItUpButton markItUpButton6 "><a href="" accesskey="I" title="Italic [Ctrl+I]">Italic</a></li><li class="markItUpSeparator">---------------</li><li class="markItUpButton markItUpButton7 "><a href="" title="Bulleted List">Bulleted List</a></li><li class="markItUpButton markItUpButton8 "><a href="" title="Numeric List">Numeric List</a></li><li class="markItUpSeparator">---------------</li><li class="markItUpButton markItUpButton9 "><a href="" accesskey="P" title="Picture [Ctrl+P]">Picture</a></li><li class="markItUpButton markItUpButton10 "><a href="" accesskey="L" title="Link [Ctrl+L]">Link</a></li><li class="markItUpSeparator">---------------</li><li class="markItUpButton markItUpButton11  markItUpDropMenu"><a href="" title="Source Code">Source Code</a><ul style="display: none;"><li class="markItUpButton markItUpButton11-1 "><a href="" title="Block">Block</a></li><li class="markItUpButton markItUpButton11-2 "><a href="" title="Inline">Inline</a></li></ul></li><li class="markItUpSeparator">---------------</li><li class="markItUpButton markItUpButton12  markItUpDropMenu"><a href="" title="Codeforces Tags">Codeforces Tags</a><ul style="display: none;"><li class="markItUpButton markItUpButton12-1 "><a href="" title="User">User</a></li><li class="markItUpButton markItUpButton12-2 "><a href="" title="Submission">Submission</a></li><li class="markItUpButton markItUpButton12-3 "><a href="" title="Problem">Problem</a></li><li class="markItUpButton markItUpButton12-4 "><a href="" title="Contest">Contest</a></li><li class="markItUpButton markItUpButton12-5 "><a href="" title="Contest time">Contest time</a></li><li class="markItUpButton markItUpButton12-6 "><a href="" title="Standings">Standings</a></li><li class="markItUpButton markItUpButton12-7 "><a href="" title="Spoiler">Spoiler</a></li></ul></li></ul></div><textarea data-drafts-id="TopicEditFrame" style="resize: vertical; width: 98.5%; height: 450px;" rows="45" id="content" name="content" class="content  markItUpEditor"></textarea><div class="markItUpFooter"><div class="markItUpResizeHandle"></div></div><div class="drafts-show-drafts" style="opacity: 0.2; position: absolute; top: 265.467px; left: 793px;"><span class="drafts-button drafts-online">Черновики</span></div></div></div></div></td>
                </tr>

                <tr>
                    <td class="field-name">Добавить изображения:</td>
                </tr>
                <tr>
                    <td>
                        <input accept="image/jpeg,image/gif,image/png" class="images" type="file" name="images" multiple="">
                    </td>
                </tr>

                <tr class="imagePreviewsRow" style="display: none;">
                    <td>
<div class="datatable" style="background-color: #E1E1E1; padding-bottom: 3px;margin-top: 0.5em;">
            <div class="lt">&nbsp;</div>
            <div class="rt">&nbsp;</div>
            <div class="lb">&nbsp;</div>
            <div class="rb">&nbsp;</div>

            <div style="padding: 4px 0 0 6px;font-size:1.4rem;position:relative;">
                Изображения

                <div style="position:absolute;right:0.25em;top:0.35em;">
                    <span style="padding:0;position:relative;bottom:2px;" class="rowCount"></span>

                    <img class="closed" src="//codeforces.org/s/99198/images/icons/control.png">

                    <span class="filter" style="display:none;">
                        <img class="opened" src="//codeforces.org/s/99198/images/icons/control-270.png">
                        <input style="padding:0 0 0 20px;position:relative;bottom:2px;border:1px solid #aaa;height:17px;font-size:1.3rem;">
                    </span>
                </div>
            </div>
            <div style="background-color: white;margin:0.3em 3px 0 3px;position:relative;">
            <div class="ilt">&nbsp;</div>
            <div class="irt">&nbsp;</div>
            <table class="imagePreviews">
                        <thead>
                            <tr><th class="top left">Предпросмотр</th>
                            <th class="top">Размер</th>
                            <th class="top right">&nbsp;</th>
                        </tr></thead>
                        <tbody>
                        <tr class="no-items visible"><td style="text-align:left;" colspan="32" class="bottom dark left right">Нет данных</td></tr></tbody>
            </table>
            </div>
        </div>
    <script type="text/javascript">
        $(document).ready(function () {
                // Create new ':containsIgnoreCase' selector for search
                jQuery.expr[':'].containsIgnoreCase = function(a, i, m) {
                    return jQuery(a).text().toUpperCase()
                            .indexOf(m[3].toUpperCase()) >= 0;
                };

                if (window.updateDatatableFilter == undefined) {
                    window.updateDatatableFilter = function(i) {
                        var parent = $(i).parent().parent().parent().parent();
                        $("tr.no-items", parent).remove();
                        $("tr", parent).hide().removeClass('visible');
                        var text = $(i).val();
                        if (text) {
                            $("tr" + ":containsIgnoreCase('" + text + "')", parent).show().addClass('visible');
                        } else {
                            parent.find(".rowCount").text("");
                            $("tr", parent).show().addClass('visible');
                        }

                        var found = false;
                        var visibleRowCount = 0;
                        $("tr", parent).each(function () {
                            if (!found) {
                                if ($(this).find("th").size() > 0) {
                                    $(this).show().addClass('visible');
                                    found = true;
                                }
                            }
                            if ($(this).hasClass('visible')) {
                                visibleRowCount++;
                            }
                        });
                        if (text) {
                            parent.find(".rowCount").text("Совпадений: " + (visibleRowCount - (found ? 1 : 0)));
                        }
                        if (visibleRowCount == (found ? 1 : 0)) {
                            $("<tr class='no-items visible'><td style=\"text-align:left;\"colspan=\"32\">Нет данных<\/td><\/tr>").appendTo($(parent).find('table'));
                        }
                        $(parent).find("tr td").removeClass("dark");
                        $(parent).find("tr.visible:odd td").addClass("dark");
                    }

                    $(".datatable .closed").click(function () {
                        var parent = $(this).parent();
                        $(this).hide();
                        $(".filter", parent).fadeIn(function () {
                            $("input", parent).val("").focus().css("border", "1px solid #aaa");
                        });
                    });

                    $(".datatable .opened").click(function () {
                        var parent = $(this).parent().parent();
                        $(".filter", parent).fadeOut(function () {
                            $(".closed", parent).show();
                            $("input", parent).val("").each(function () {
                                window.updateDatatableFilter(this);
                            });
                        });
                    });

                    $(".datatable .filter input").keyup(function(e) {
                        window.updateDatatableFilter(this);
                        e.preventDefault();
                        e.stopPropagation();
                    });

                    $(".datatable table").each(function () {
                        var found = false;
                        $("tr", this).each(function () {
                            if (!found && $(this).find("th").size() == 0) {
                                found = true;
                            }
                        });
                        if (!found) {
                            $("<tr class='no-items visible'><td style=\"text-align:left;\"colspan=\"32\">Нет данных<\/td><\/tr>").appendTo(this);
                        }
                    });

                    // Applies styles to datatables.
                    $(".datatable").each(function () {
                        $(this).find("tr:first th").addClass("top");
                        $(this).find("tr:last td").addClass("bottom");
                        $(this).find("tr:odd td").addClass("dark");
                        $(this).find("tr td:first-child, tr th:first-child").addClass("left");
                        $(this).find("tr td:last-child, tr th:last-child").addClass("right");
                    });

                    $(".datatable table.tablesorter").each(function () {
                        $(this).bind("sortEnd", function () {
                            $(".datatable").each(function () {
                                $(this).find("th, td")
                                    .removeClass("top").removeClass("bottom")
                                    .removeClass("left").removeClass("right")
                                    .removeClass("dark");
                                $(this).find("tr:first th").addClass("top");
                                $(this).find("tr:last td").addClass("bottom");
                                $(this).find("tr:odd td").addClass("dark");
                                $(this).find("tr td:first-child, tr th:first-child").addClass("left");
                                $(this).find("tr td:last-child, tr th:last-child").addClass("right");
                            });
                        });
                    });
                }
        });
    </script>
                    </td>
                </tr>

                <tr>
                    <td class="field-name">
                        <label for="comment">Комментарий:</label>
                        <div class="notice" style="float: right;font-size:smaller">Опциональный короткий комментарий к правке</div>
                    </td>
                </tr>

                <tr>
                    <td><input style="box-sizing:border-box; width: 100%;" placeholder="Первая редакция" id="comment" name="comment" value=""></td>
                </tr>

                <tr>
                    <td class="field-name">
                        <label>Разрешить просмотр истории:
                            <input type="checkbox" name="allowViewHistory" style="position:relative; top: 2px;margin-right:1em;" checked="true">
                            <span class="notice" style="font-size: smaller;">Показывать историю правок всем тем, кто может читать текст</span>
                        </label>
                    </td>
                </tr>

                    <tr style="display: none;">
                        <td class="field-name">
                            <a class="showCoauthorsFormPart" href="#">Добавить соавторов</a>
                        </td>
                    </tr>
                <tr class="coauthorsFormPart" style="">
                    <td class="field-name">
                        <label for="coauthorHandles">Соавторы:</label>
                        <div class="notice" style="float: right;font-size:smaller">Список хэндлов, разделенных запятой</div>
                    </td>
                </tr>
                <tr class="coauthorsFormPart" style="">
                    <td><textarea rows="1" style="resize:none; box-sizing:border-box; width: 100%;" id="coauthorHandles" name="coauthorHandles"></textarea></td>
                </tr>

                
    <tr>
        <td class="field-name">Теги:</td>
    </tr>
    <tr>
        <td style="padding: 0 6px 0.5em 0;" class="tags">
            <table>
                <tbody><tr>
                    <td style="width:31em;vertical-align:top;padding: 0;">
                        <div style="border-right:4px solid #B9B9B9;padding-right:1em;">
                            <ul style="margin-bottom:0.5em;">
                                        <li>
                                    <input style="width: 7em;" name="tag0" value="" autocomplete="off" class="ac_input">
                                    <input style="width: 7em;" name="tag1" value="" autocomplete="off" class="ac_input">
                                    <input style="width: 7em;" name="tag2" value="" autocomplete="off" class="ac_input">
                                    <input style="width: 7em;" name="tag3" value="" autocomplete="off" class="ac_input">
                                        </li>
                                <li style="text-align:right;">
                                    <a style="margin-right: 4px;" class="smaller add-tags-row" href="#">Добавить строчку</a>
                                </li>
                            </ul>
                         </div>
                    </td>
                    <td style="padding: 0 1em;vertical-align:top;font-size:smaller;">
                        <div style="position: relative; bottom: 4px;">
                            Используйте русский язык для записи тегов. Все теги будут использованы в нижнем регистре. Примеры: "геометрия", "gcj". Интернациональные слова и сокращения записывайте по-английски, например "google" вместо "гугл". 
                        </div>
                    </td>
                </tr>
            </tbody></table>
        </td>
    </tr>

    <script type="text/javascript">
        $(document).ready(function () {
    $("a.add-tags-row").click(function () {
        var currentLi = $(this).parent();
        var li = $("<li></li>");
        var count = $("td.tags input").size();
        var input1 = $("<input style=\"width: 7em;\" name=\"tag" + count++ + "\"/>");
        var input2 = $("<input style=\"width: 7em;\" name=\"tag" + count++ + "\"/>");
        var input3 = $("<input style=\"width: 7em;\" name=\"tag" + count++ + "\"/>");
        var input4 = $("<input style=\"width: 7em;\" name=\"tag" + count++ + "\"/>");
        input1.appendTo(li);
        $("<span>&nbsp;</span>").appendTo(li);
        input2.appendTo(li);
        $("<span>&nbsp;</span>").appendTo(li);
        input3.appendTo(li);
        $("<span>&nbsp;</span>").appendTo(li);
        input4.appendTo(li);
        li.insertBefore(currentLi);
        input1.focus();

        $("input", li).autocomplete("/data/suggest/tags", {
            delay: 200,
            width: 200,
            selectFirst: false,
            matchContains: true,
            minChars: 2
        });

        return false;
    });

    $("td.tags input").autocomplete("/data/suggest/tags", {
        delay: 200,
        width: 200,
        selectFirst: false,
        matchContains: true,
        minChars: 2
    });
        });
    </script>




                <tr>
                    <td>
                        <table style="margin: 0 auto;">
                            <tbody><tr>
                                <td style="padding-right: 1em;">
                                <input class="button" type="submit" name="submitButton" value="Опубликовать">
                                <label><input class="button" type="button" name="saveDraft" value="Сохранить в черновиках"></label>
                                <label><input class="button" type="button" name="preview" value="Предпросмотр"></label>
                                </td>
                                <td style="border-left: 4px solid #B9B9B9; padding-left: 1em;">
                                <label><input class="button" type="button" name="discardTopic" value="Удалить"></label>
                                </td>
                            </tr>

                        </tbody></table>
                    </td>
                </tr>
            </tbody>
    </body>
</html>
