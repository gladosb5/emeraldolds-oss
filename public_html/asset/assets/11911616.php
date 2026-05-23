<roblox xmlns:xmime="http://www.w3.org/2005/05/xmlmime" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="http://www.roblox.com/roblox.xsd" version="4">
	<External>null</External>
	<External>nil</External>
	<Item class="Model" referent="RBX0">
		<Properties>
			<bool name="Archivable">true</bool>
			<CoordinateFrame name="ModelInPrimary">
				<X>0</X>
				<Y>0</Y>
				<Z>0</Z>
				<R00>1</R00>
				<R01>0</R01>
				<R02>0</R02>
				<R10>0</R10>
				<R11>1</R11>
				<R12>0</R12>
				<R20>0</R20>
				<R21>0</R21>
				<R22>1</R22>
			</CoordinateFrame>
			<string name="Name">Moon</string>
			<Ref name="PrimaryPart">RBX1</Ref>
		</Properties>
		<Item class="Part" referent="RBX1">
			<Properties>
				<bool name="Anchored">false</bool>
				<bool name="Archivable">true</bool>
				<float name="BackParamA">-0.5</float>
				<float name="BackParamB">0.5</float>
				<token name="BackSurface">0</token>
				<token name="BackSurfaceInput">0</token>
				<float name="BottomParamA">-0.5</float>
				<float name="BottomParamB">0.5</float>
				<token name="BottomSurface">0</token>
				<token name="BottomSurfaceInput">0</token>
				<int name="BrickColor">194</int>
				<CoordinateFrame name="CFrame">
					<X>0</X>
					<Y>931.200012</Y>
					<Z>0</Z>
					<R00>1</R00>
					<R01>-0</R01>
					<R02>0</R02>
					<R10>0</R10>
					<R11>-0</R11>
					<R12>1</R12>
					<R20>0</R20>
					<R21>-1</R21>
					<R22>0</R22>
				</CoordinateFrame>
				<bool name="CanCollide">true</bool>
				<float name="Elasticity">0.5</float>
				<token name="FormFactor">0</token>
				<float name="Friction">0.300000012</float>
				<float name="FrontParamA">-0.5</float>
				<float name="FrontParamB">0.5</float>
				<token name="FrontSurface">0</token>
				<token name="FrontSurfaceInput">0</token>
				<float name="LeftParamA">-0.5</float>
				<float name="LeftParamB">0.5</float>
				<token name="LeftSurface">0</token>
				<token name="LeftSurfaceInput">0</token>
				<bool name="Locked">false</bool>
				<token name="Material">256</token>
				<string name="Name">Moon</string>
				<float name="Reflectance">0</float>
				<float name="RightParamA">-0.5</float>
				<float name="RightParamB">0.5</float>
				<token name="RightSurface">0</token>
				<token name="RightSurfaceInput">0</token>
				<Vector3 name="RotVelocity">
					<X>0</X>
					<Y>0</Y>
					<Z>0</Z>
				</Vector3>
				<float name="TopParamA">-0.5</float>
				<float name="TopParamB">0.5</float>
				<token name="TopSurface">0</token>
				<token name="TopSurfaceInput">0</token>
				<float name="Transparency">0</float>
				<Vector3 name="Velocity">
					<X>0</X>
					<Y>0</Y>
					<Z>0</Z>
				</Vector3>
				<token name="shape">0</token>
				<Vector3 name="size">
					<X>100</X>
					<Y>100</Y>
					<Z>100</Z>
				</Vector3>
			</Properties>
			<Item class="BodyPosition" referent="RBX2">
				<Properties>
					<bool name="Archivable">true</bool>
					<float name="D">1250</float>
					<string name="Name">BodyPosition</string>
					<float name="P">10000</float>
					<Vector3 name="maxForce">
						<X>9.99999996e+011</X>
						<Y>9.99999996e+011</Y>
						<Z>9.99999996e+011</Z>
					</Vector3>
					<Vector3 name="position">
						<X>0</X>
						<Y>50</Y>
						<Z>0</Z>
					</Vector3>
				</Properties>
				<Item class="Script" referent="RBX3">
					<Properties>
						<bool name="Archivable">true</bool>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Script</string>
						<ProtectedString name="Source">script.Parent.position = script.Parent.Parent.Position
</ProtectedString>
					</Properties>
				</Item>
			</Item>
			<Item class="Sound" referent="RBX4">
				<Properties>
					<bool name="Archivable">true</bool>
					<bool name="Looped">false</bool>
					<string name="Name">Boom</string>
					<float name="Pitch">1</float>
					<bool name="PlayOnRemove">false</bool>
					<Content name="SoundId"><url>rbxasset://sounds/Rocket shot.wav</url></Content>
					<float name="Volume">1</float>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX5">
				<Properties>
					<bool name="Archivable">true</bool>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Sound</string>
					<ProtectedString name="Source">function onTouched(hit)
 script.Parent.Boom:play()
end

script.Parent.Touched:connect(onTouched)
</ProtectedString>
				</Properties>
			</Item>
			<Item class="Decal" referent="RBX6">
				<Properties>
					<bool name="Archivable">true</bool>
					<token name="Face">5</token>
					<string name="Name">Decal</string>
					<float name="Shiny">20</float>
					<float name="Specular">0</float>
					<Content name="Texture"><url>http://www.roblox.com/asset/?id=2285929</url></Content>
					<float name="Transparency">0</float>
				</Properties>
			</Item>
			<Item class="Decal" referent="RBX7">
				<Properties>
					<bool name="Archivable">true</bool>
					<token name="Face">4</token>
					<string name="Name">Decal</string>
					<float name="Shiny">20</float>
					<float name="Specular">0</float>
					<Content name="Texture"><url>http://www.roblox.com/asset/?id=2285929</url></Content>
					<float name="Transparency">0</float>
				</Properties>
			</Item>
			<Item class="Decal" referent="RBX8">
				<Properties>
					<bool name="Archivable">true</bool>
					<token name="Face">3</token>
					<string name="Name">Decal</string>
					<float name="Shiny">20</float>
					<float name="Specular">0</float>
					<Content name="Texture"><url>http://www.roblox.com/asset/?id=2285929</url></Content>
					<float name="Transparency">0</float>
				</Properties>
			</Item>
			<Item class="Decal" referent="RBX9">
				<Properties>
					<bool name="Archivable">true</bool>
					<token name="Face">1</token>
					<string name="Name">Decal</string>
					<float name="Shiny">20</float>
					<float name="Specular">0</float>
					<Content name="Texture"><url>http://www.roblox.com/asset/?id=2285929</url></Content>
					<float name="Transparency">0</float>
				</Properties>
			</Item>
			<Item class="Decal" referent="RBX10">
				<Properties>
					<bool name="Archivable">true</bool>
					<token name="Face">0</token>
					<string name="Name">Decal</string>
					<float name="Shiny">20</float>
					<float name="Specular">0</float>
					<Content name="Texture"><url>http://www.roblox.com/asset/?id=2285929</url></Content>
					<float name="Transparency">0</float>
				</Properties>
			</Item>
			<Item class="Decal" referent="RBX11">
				<Properties>
					<bool name="Archivable">true</bool>
					<token name="Face">2</token>
					<string name="Name">Decal</string>
					<float name="Shiny">20</float>
					<float name="Specular">0</float>
					<Content name="Texture"><url>http://www.roblox.com/asset/?id=2285929</url></Content>
					<float name="Transparency">0</float>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX12">
				<Properties>
					<bool name="Archivable">true</bool>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Script</string>
					<ProtectedString name="Source">function onTouched(hit)
hit:BreakJoints()
end
script.Parent.Touched:connect(onTouched)</ProtectedString>
				</Properties>
			</Item>
		</Item>
		<Item class="Script" referent="RBX13">
			<Properties>
				<bool name="Archivable">true</bool>
				<bool name="Disabled">false</bool>
				<Content name="LinkedSource"><null></null></Content>
				<string name="Name">MoonScript</string>
				<ProtectedString name="Source">slowfall = script.Parent.Moon.BodyPosition
moon = script.Parent.Moon
cd = Instance.new(&quot;Hint&quot;)
cd.Parent = moon

while true do
cd.Text = &quot;Disaster will strike when the moon hits.  Altitude: &quot;..moon.Position.y..&quot;&quot;
wait(0.1)
slowfall.position = Vector3.new(slowfall.position.x-0, slowfall.position.y-1, slowfall.position.z+0)
end 


--By BaronOBeefdip(EdduTheArdo)</ProtectedString>
			</Properties>
		</Item>
		<Item class="Script" referent="RBX14">
			<Properties>
				<bool name="Archivable">true</bool>
				<bool name="Disabled">false</bool>
				<Content name="LinkedSource"><null></null></Content>
				<string name="Name">The Regen</string>
				<ProtectedString name="Source">model = script.Parent
messageText = &quot;Regenerating Moon...&quot;

message = Instance.new(&quot;Message&quot;)
message.Text = messageText
backup = model:clone()

while true do
	wait(200) --Or whatever time.

	message.Parent = game.Workspace
	model:remove()

	wait(2) 

	model = backup:clone()
	model.Parent = game.Workspace
	model:makeJoints()
	message.Parent = nil
end
</ProtectedString>
			</Properties>
		</Item>
	</Item>
</roblox>


