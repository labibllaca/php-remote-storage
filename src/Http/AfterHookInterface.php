<?php
/**
 *  Copyright (C) 2016 SURFnet.
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as
 *  published by the Free Software Foundation, either version 3 of the
 *  License, or (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace fkooman\RemoteStorage\Http;

interface AfterHookInterface
{
    /**
     * Execute a hook before returning the response to the client.
     *
     * @param Request  $request  the HTTP request
     * @param Response $response the HTTP response so far, the hook can modify
     *                           it
     *
     * @return Response the (modified) HTTP response
     */
    public function executeAfter(Request $request, Response $response);
}