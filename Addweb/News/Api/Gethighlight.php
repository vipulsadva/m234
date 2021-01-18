<?php
namespace Addweb\News\Api;
interface Gethighlight
{
    /**
     * @api
     * @param int $id
     * @return array
     */
    public function gethighlightdata($id);
}
