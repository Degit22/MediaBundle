<?php

namespace Creonit\MediaBundle\Admin;

use Creonit\MediaBundle\Model\GalleryItemQuery;
use Creonit\AdminBundle\Component\Request\ComponentRequest;
use Creonit\AdminBundle\Component\Response\ComponentResponse;
use Creonit\AdminBundle\Component\Scope\Scope;
use Creonit\AdminBundle\Component\TableComponent;
use Propel\Runtime\ActiveQuery\ModelCriteria;

class GalleryTable extends TableComponent
{


    /**
     *
     * @header
     * {{ button('Добавить изображение', {icon: 'image', size: 'sm', type: 'success'}) | open('Media.GalleryImageEditor', _query) }}
     * {{ button('Добавить видео', {icon: 'youtube-play', size: 'sm', type: 'success'}) | open('Media.GalleryVideoEditor', _query) }}
     *
     * @cols Изображение / Видео, .
     *
     * \GalleryItem
     * @entity Creonit\MediaBundle\Model\GalleryItem
     * @sortable true
     *
     * @field image_id:image
     * @field video_id:video
     * @field url:image
     *
     * @col
     * {% if image_id %}
     *      {{ image_id.preview | raw | open('Media.GalleryImageEditor', {key: _key}) | controls }}
     * {% else %}
     *      {{ video_id.preview | raw | open('Media.GalleryVideoEditor', {key: _key}) | controls }}
     * {% endif %}
     *
     * @col {{ _delete() }}
     *
     */
    public function schema()
    {
    }

    /**
     * @param ComponentRequest $request
     * @param ComponentResponse $response
     * @param GalleryItemQuery $query
     * @param Scope $scope
     * @param $relation
     * @param $relationValue
     * @param $level
     */
    protected function filter(ComponentRequest $request, ComponentResponse $response, $query, Scope $scope, $relation, $relationValue, $level)
    {
        $query->filterByGalleryId($request->query->get('gallery_id'));
        
    }


}