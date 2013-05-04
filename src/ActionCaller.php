<?php namespace Dotink\Traits
{
	use Dotink\Flourish;

	/**
	 * The action caller trait, for any class that might call routable actions
	 *
	 * @copyright Copyright (c) 2012, Matthew J. Sahagian
	 * @author Matthew J. Sahagian [mjs] <msahagian@dotink.org>
	 *
	 * @license Please reference the LICENSE.txt file at the root of this distribution
	 *
	 * @package Dotink\Traits
	 * @uses Dotink\Flourish\ProgrammerException
	 */
	trait ActionCaller
	{
		/**
		 * Calls an action and returns an action response
		 *
		 * @access private
		 * @param mixed $action The action to call
		 * @param Interfaces\Request $request The current request being made
		 * @param Interfaces\Response $response The current response
		 */
		static private function callAction($router, $action, $request, $response)
		{
			$context = [
				'request'  => $request,
				'response' => $response,
				'router'   => $router
			];

			if ($action instanceof \Closure) {
				$action_response = $action($context);

			} elseif (is_array($action)) {
				$class = is_object($action[0])
					? get_class($action[0])
					: $action[0];

				if (!in_array(self::CONTAINER_INTERFACE, class_implements($class))) {
					$controller       = new $action[0]();
					$action_response  = $controller->$action[1]($context);

				} else {
					$controller       = new $action[0]();
					$action_response  = $controller->setContext($context)->$action[1]();
				}

			} else {
				$action_response = $action();
			}

			return $action_response;
		}
	}
}
