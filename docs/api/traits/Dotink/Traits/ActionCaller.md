# ActionCaller
## The action caller trait, for any class that might call routable actions

_Copyright (c) 2012, Matthew J. Sahagian_.
_Please reference the LICENSE.txt file at the root of this distribution_

#### Namespace

`Dotink\Traits`

#### Imports

<table>

	<tr>
		<th>Alias</th>
		<th>Namespace / Class</th>
	</tr>
	
	<tr>
		<td>Flourish</td>
		<td>Dotink\Flourish</td>
	</tr>
	
</table>

#### Authors

<table>
	<thead>
		<th>Name</th>
		<th>Handle</th>
		<th>Email</th>
	</thead>
	<tbody>
	
		<tr>
			<td>
				Matthew J. Sahagian
			</td>
			<td>
				mjs
			</td>
			<td>
				msahagian@dotink.org
			</td>
		</tr>
	
	</tbody>
</table>


## Methods
### Static Methods
<hr />

#### <span style="color:#3e6a6e;">callAction()</span>

Calls an action and returns an action response

###### Parameters

<table>
	<thead>
		<th>Name</th>
		<th>Type(s)</th>
		<th>Description</th>
	</thead>
	<tbody>
			
		<tr>
			<td>
				$action
			</td>
			<td>
									<a href="http://www.php.net/language.pseudo-types.php">mixed</a>
				
			</td>
			<td>
				The action to call
			</td>
		</tr>
					
		<tr>
			<td>
				$request
			</td>
			<td>
									Interfaces\Request				
			</td>
			<td>
				The current request being made
			</td>
		</tr>
					
		<tr>
			<td>
				$response
			</td>
			<td>
									Interfaces\Response				
			</td>
			<td>
				The current response
			</td>
		</tr>
			
	</tbody>
</table>







