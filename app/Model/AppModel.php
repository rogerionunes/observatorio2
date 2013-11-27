<?php
/**
 *
 * AppModel
 *
 */

App::uses('Model', 'Model');

class AppModel extends Model {

	public $cacheQueries = true;

	/**
	 * Função para gerar slug do campo
	 */
	public function formatName($campo)
	{

		$slug = strtolower(Inflector::slug($campo, '-'));
		return sprintf('%s', $slug);

	}

	/**
	 * Função para converter a data para o metodo YYYY-MM-DD
	 */
	public function dateFormat($date)
	{

		return implode("-",array_reverse(explode("/",$date)));

	}

	/**
     * Função para string em slug
     */
    public function generateSlug($title)
    {

		return Inflector::slug(mb_strtolower($title), '-');

    }

}
