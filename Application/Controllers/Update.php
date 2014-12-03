<?php
/*
 * This file is part of wampi.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Application\Controllers;

use Doctrine\DBAL\Schema\Schema;

class Update extends Installation
{
    public function form()
    {
        # allready up to date ?
        if ($this->isUpToDate()) {
            return $this->redirectToRoute('projects');
        }

        return $this->render('Update', [
        ]);
    }

    public function process()
    {
        $this->databaseSchema();

        $this->installedFile();

        $this->app->clearCache();

        $this->app['flashMessages']->success($this->app['translator']->trans('update.success'));

        return $this->redirectToRoute('projects');
    }

}