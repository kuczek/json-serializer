<?php
/**
 * @author    Krystian Kuczek <kkuczek@tvn.pl>
 * @copyright 2016 TVN.SA
 */

namespace Zumba\Util\Test\SupportClasses;


class JsonSerializedEncoded
{
    private $advanced = "{\"text_line_1\":\"W TVN codzinnie\",\"text_line_2\":\"od poniedzia\\u0142ku - do pi\\u0105tku\",\"text_line_3\":\"\",\"text_day_0\":\"10:45-12:00\",\"text_day_1\":\"10:45-23:00\",\"text_day_2\":\"\",\"text_day_3\":\"\",\"text_day_4\":\"10:45-23:00\",\"text_day_5\":\"\",\"text_day_6\":\"\"}";
    private $simple = 'uk\u0142ad drivera';
    private $nonUtf8 = 'ßåö';

}
