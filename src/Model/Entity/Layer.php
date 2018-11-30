<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Layer Entity
 *
 * @property int $idlayer
 * @property string $nombre
 * @property string $urlservice
 * @property string $styles
 * @property string $format
 * @property bool $transparent
 * @property string $version
 * @property string $crs
 * @property bool $uppercase
 * @property int $minzoom
 * @property int $maxzoom
 * @property float $opacity
 * @property string $attribution
 * @property int $escala_idescala
 * @property int $categoria_idcategoria
 * @property bool $activo
 * @property string $layers
 * @property int $tiles
 *
 * @property \App\Model\Entity\Escalascapa $escalascapa
 */
class Layer extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nombre' => true,
        'urlservice' => true,
        'styles' => true,
        'format' => true,
        'transparent' => true,
        'version' => true,
        'crs' => true,
        'uppercase' => true,
        'minzoom' => true,
        'maxzoom' => true,
        'opacity' => true,
        'attribution' => true,
        'escala_idescala' => true,
        'categoria_idcategoria' => true,
        'activo' => true,
        'layers' => true,
        'tiles' => true,
        'escalascapa' => true
    ];
}
