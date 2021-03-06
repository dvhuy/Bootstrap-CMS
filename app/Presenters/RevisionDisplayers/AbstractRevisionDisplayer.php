<?php

/*
 * This file is part of Bootstrap CMS by Graham Campbell.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 */

namespace GrahamCampbell\BootstrapCMS\Presenters\RevisionDisplayers;

use GrahamCampbell\Credentials\Presenters\RevisionDisplayers\AbstractRevisionDisplayer as BaseRevisionDisplayer;
use GrahamCampbell\Credentials\Presenters\RevisionDisplayers\RevisionDisplayerInterface;

/**
 * This is the abstract displayer class.
 *
 * @author    Graham Campbell <graham@mineuk.com>
 * @copyright 2013-2014 Graham Campbell
 * @license   <https://github.com/GrahamCampbell/Bootstrap-CMS/blob/master/LICENSE.md> AGPL 3.0
 */
abstract class AbstractRevisionDisplayer extends BaseRevisionDisplayer implements RevisionDisplayerInterface
{
    /**
     * Get the change description.
     *
     * @return string
     */
    public function description()
    {
        if ($this->presenter->wasByCurrentUser()) {
            return $this->current();
        }

        return $this->external();
    }

    /**
     * Get the change description from the context of
     * the change being made by the current user.
     *
     * @return string
     */
    abstract protected function current();

    /**
     * Get the change description from the context of
     * the change not being made by the current user.
     *
     * @return string
     */
    abstract protected function external();
}
