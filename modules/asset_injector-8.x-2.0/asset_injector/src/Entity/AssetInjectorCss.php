<?php

namespace Drupal\asset_injector\Entity;

/**
 * Defines the Css Injector entity.
 *
 * @ConfigEntityType(
 *   id = "asset_injector_css",
 *   label = @Translation("Css Injector"),
 *   list_cache_tags = { "library_info" },
 *   handlers = {
 *     "list_builder" = "Drupal\asset_injector\AssetInjectorListBuilder",
 *     "form" = {
 *       "add" = "Drupal\asset_injector\Form\AssetInjectorCssForm",
 *       "edit" = "Drupal\asset_injector\Form\AssetInjectorCssForm",
 *       "delete" = "Drupal\asset_injector\Form\AssetInjectorDeleteForm",
 *       "enable" = "Drupal\asset_injector\Form\AssetInjectorEnableForm",
 *       "disable" = "Drupal\asset_injector\Form\AssetInjectorDisableForm",
 *       "duplicate" = "Drupal\asset_injector\Form\AssetInjectorCssDuplicateForm",
 *     },
 *   },
 *   config_prefix = "css",
 *   admin_permission = "administer css assets injector",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "status" = "status",
 *   },
 *   links = {
 *     "canonical" = "/admin/config/development/asset-injector/css/{asset_injector_css}",
 *     "edit-form" = "/admin/config/development/asset-injector/css/{asset_injector_css}/edit",
 *     "delete-form" = "/admin/config/development/asset-injector/css/{asset_injector_css}/delete",
 *     "enable" = "/admin/config/development/asset-injector/css/{asset_injector_css}/enable",
 *     "disable" = "/admin/config/development/asset-injector/css/{asset_injector_css}/disable",
 *     "collection" = "/admin/structure/visibility_group"
 *   }
 * )
 */
class AssetInjectorCss extends AssetInjectorBase {

  /**
   * Themes to apply.
   *
   * @var array
   */
  public $themes = [];

  /**
   * Media selector.
   *
   * @var string
   */
  public $media = '';

  /**
   * Preprocess css before adding.
   *
   * @var bool
   */
  public $preprocess = TRUE;

  /**
   * Gets the file extension of the asset.
   *
   * @return string
   *   Css extension.
   */
  public function extension() {
    return 'css';
  }

  /**
   * {@inheritdoc}
   */
  public function libraryInfo() {
    $path = $this->filePathRelativeToDrupalRoot();
    $library_info = [
      'css' => [
        'theme' => [
          $path => [
            'weight' => 0,
            'preprocess' => $this->preprocess,
            'media' => $this->media,
          ],
        ],
      ],
    ];
    return $library_info;
  }

}
