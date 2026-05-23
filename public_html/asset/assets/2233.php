<roblox xmlns:xmime="http://www.w3.org/2005/05/xmlmime" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="http://www.roblox.com/roblox.xsd" version="4">
	<External>null</External>
	<External>nil</External>
	<Item class="Hat" referent="RBX0">
		<Properties>
			<CoordinateFrame name="AttachmentPoint">
				<X>0</X>
				<Y>0.25</Y>
				<Z>0.100000001</Z>
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
			<int name="BackendAccoutrementState">4</int>
			<string name="Name">TeapotTurret</string>
			<bool name="archivable">true</bool>
		</Properties>
		<Item class="Part" referent="RBX1">
			<Properties>
				<bool name="Anchored">false</bool>
				<float name="BackParamA">-0.5</float>
				<float name="BackParamB">0.5</float>
				<token name="BackSurface">0</token>
				<token name="BackSurfaceInput">0</token>
				<float name="BottomParamA">-0.5</float>
				<float name="BottomParamB">0.5</float>
				<token name="BottomSurface">0</token>
				<token name="BottomSurfaceInput">0</token>
				<int name="BrickColor">226</int>
				<CoordinateFrame name="CFrame">
					<X>4.37572956</X>
					<Y>5.14905739</Y>
					<Z>61.9369087</Z>
					<R00>-0.916252911</R00>
					<R01>-2.25763943e-021</R01>
					<R02>-0.400600582</R02>
					<R10>-3.1204912e-021</R10>
					<R11>1</R11>
					<R12>1.50154415e-021</R12>
					<R20>0.400600582</R20>
					<R21>2.62586466e-021</R21>
					<R22>-0.916252911</R22>
				</CoordinateFrame>
				<bool name="CanCollide">true</bool>
				<bool name="CastsShadows">true</bool>
				<token name="Controller">0</token>
				<bool name="ControllerFlagShown">true</bool>
				<bool name="Cullable">true</bool>
				<bool name="DraggingV1">false</bool>
				<float name="Elasticity">0.5</float>
				<token name="FormFactor">2</token>
				<float name="Friction">0.300000012</float>
				<float name="FrontParamA">-0.5</float>
				<float name="FrontParamB">0.5</float>
				<token name="FrontSurface">0</token>
				<token name="FrontSurfaceInput">0</token>
				<float name="LeftParamA">-0.5</float>
				<float name="LeftParamB">0.5</float>
				<token name="LeftSurface">0</token>
				<token name="LeftSurfaceInput">0</token>
				<bool name="Locked">true</bool>
				<string name="Name">Handle</string>
				<float name="Reflectance">0</float>
				<float name="RightParamA">-0.5</float>
				<float name="RightParamB">0.5</float>
				<token name="RightSurface">0</token>
				<token name="RightSurfaceInput">0</token>
				<Vector3 name="RotVelocity">
					<X>-3.86562007e-023</X>
					<Y>2.61576078e-022</Y>
					<Z>-2.37196843e-023</Z>
				</Vector3>
				<float name="TopParamA">-0.5</float>
				<float name="TopParamB">0.5</float>
				<token name="TopSurface">0</token>
				<token name="TopSurfaceInput">0</token>
				<float name="Transparency">0</float>
				<Vector3 name="Velocity">
					<X>3.64798088e-020</X>
					<Y>0.00751967728</Y>
					<Z>3.64803065e-020</Z>
				</Vector3>
				<bool name="archivable">true</bool>
				<token name="shape">1</token>
				<Vector3 name="size">
					<X>2</X>
					<Y>1.60000002</Y>
					<Z>2</Z>
				</Vector3>
			</Properties>
			<Item class="SpecialMesh" referent="RBX2">
				<Properties>
					<Content name="MeshId"><url>http://gchblox.tk/asset/?id=2232</url></Content>
					<token name="MeshType">5</token>
					<string name="Name">Mesh</string>
					<Vector3 name="Scale">
						<X>3</X>
						<Y>3</Y>
						<Z>3</Z>
					</Vector3>
					<Content name="TextureId"><url>http://gchblox.tk/asset/?id=2231</url></Content>
					<Vector3 name="VertexColor">
						<X>1</X>
						<Y>1</Y>
						<Z>1</Z>
					</Vector3>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Sound" referent="RBX3">
				<Properties>
					<bool name="Looped">false</bool>
					<string name="Name">Explosion</string>
					<int name="PlayCount">0</int>
					<bool name="PlayOnRemove">false</bool>
					<Content name="SoundId"><url>rbxasset://sounds\collide.wav</url></Content>
					<float name="Volume">1</float>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Sound" referent="RBX4">
				<Properties>
					<bool name="Looped">true</bool>
					<string name="Name">Swoosh</string>
					<int name="PlayCount">-1</int>
					<bool name="PlayOnRemove">false</bool>
					<Content name="SoundId"><url>rbxasset://sounds\Rocket whoosh 01.wav</url></Content>
					<float name="Volume">0.699999988</float>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="RocketPropulsion" referent="RBX5">
				<Properties>
					<float name="CartoonFactor">1</float>
					<float name="MaxSpeed">25</float>
					<float name="MaxThrust">4e+010</float>
					<Vector3 name="MaxTorque">
						<X>3.99999995e+015</X>
						<Y>3.99999995e+015</Y>
						<Z>3.99999995e+015</Z>
					</Vector3>
					<string name="Name">homing</string>
					<Ref name="Target">null</Ref>
					<Vector3 name="TargetOffset">
						<X>0</X>
						<Y>0</Y>
						<Z>0</Z>
					</Vector3>
					<float name="TargetRadius">4</float>
					<float name="ThrustD">3</float>
					<float name="ThrustP">30</float>
					<float name="TurnD">4000</float>
					<float name="TurnP">20000</float>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX6">
				<Properties>
					<bool name="Disabled">true</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">RocketScript</string>
					<string name="Source">r = game:service(&quot;RunService&quot;)&#13;&#10;&#13;&#10;shaft = script.Parent&#13;&#10;position = shaft.Position&#13;&#10;&#13;&#10;script.Parent.Explosion.PlayOnRemove = true -- play explosion sound when projectile removed from game&#13;&#10;bother = true&#13;&#10;&#13;&#10;function blow(hit)&#13;&#10;&#9;if(bother == true) then return end&#13;&#10;&#9;if(string.sub(hit.Name,1,6) == &quot;teapot&quot;) then return end&#13;&#10;&#9;swoosh:stop()&#13;&#10;&#9;explosion = Instance.new(&quot;Explosion&quot;)&#13;&#10;&#9;explosion.Position = shaft.Position&#13;&#10;&#13;&#10;&#9;explosion.Parent = game.Workspace&#13;&#10;&#9;wait(.1)&#13;&#10;&#9;shaft:remove()&#13;&#10;end&#13;&#10;&#13;&#10;function onPlayerBlownUp(part, distance, creator)&#13;&#10;&#9;&#13;&#10;&#9;if part.Name == &quot;Head&quot; then&#13;&#10;&#9;&#13;&#10;&#9;&#9;local humanoid = part.Parent.Humanoid&#13;&#10;&#9;&#9;tagHumanoid(humanoid, creator)&#13;&#10;&#9;end&#13;&#10;end&#13;&#10;&#13;&#10;function tagHumanoid(humanoid, creator)&#13;&#10;&#9;-- tag does not need to expire iff all explosions lethal&#13;&#10;&#9;&#13;&#10;&#9;if creator ~= nil then&#13;&#10;&#9;&#9;local new_tag = creator:clone()&#13;&#10;&#9;&#9;new_tag.Parent = humanoid&#13;&#10;&#9;&#9;&#13;&#10;&#9;end&#13;&#10;end&#13;&#10;&#13;&#10;function untagHumanoid(humanoid)&#13;&#10;&#9;if humanoid ~= nil then&#13;&#10;&#9;&#9;local tag = humanoid:findFirstChild(&quot;creator&quot;)&#13;&#10;&#9;&#9;if tag ~= nil then&#13;&#10;&#9;&#9;&#13;&#10;&#9;&#9;&#9;tag.Parent = nil&#13;&#10;&#9;&#9;end&#13;&#10;&#9;end&#13;&#10;end&#13;&#10;&#13;&#10;swoosh = script.Parent.Swoosh&#13;&#10;swoosh:play()&#13;&#10;&#13;&#10;connection = shaft.Touched:connect(blow)&#13;&#10;&#13;&#10;wait(30)&#13;&#10;-- at max range&#13;&#10;script.Parent.Explosion.PlayOnRemove = false&#13;&#10;swoosh:stop()&#13;&#10;shaft:remove()&#13;&#10;</string>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Script" referent="RBX7">
			<Properties>
				<bool name="Disabled">false</bool>
				<Content name="LinkedSource"><null></null></Content>
				<string name="Name">Server Launcher</string>
				<string name="Source">local hat = script.Parent&#13;&#10;local Rocket = hat.Handle&#13;&#10;local block = hat.Handle:clone()&#13;&#10;block.Size = Vector3.new(4,7,3)&#13;&#10;block.Name = &quot;shield&quot;&#13;&#10;number = 4&#13;&#10;radius = 6&#13;&#10;&#13;&#10;teapot = hat.Handle:clone()&#13;&#10;teapot.Size = Vector3.new(65,65,65)&#13;&#10;teapot.Mesh.Scale = Vector3.new(100,100,100)&#13;&#10;teapot.Name = &quot;massive teapot&quot;&#13;&#10;teapot.Size = Vector3.new(65,65,65)&#13;&#10;teapot.Mesh.Scale = Vector3.new(100,100,100)&#13;&#10;teapot.Name = &quot;massive teapot&quot;&#13;&#10;&#13;&#10;function either(number)&#13;&#10;&#9;if(math.random(1,2) == 1) then return number end&#13;&#10;&#9;return -number&#13;&#10;end&#13;&#10;&#13;&#10;function glue(x, y)&#13;&#10;&#9;weld = Instance.new(&quot;Weld&quot;) &#13;&#10;&#13;&#10;&#9;weld.Part0 = x&#13;&#10;&#9;weld.Part1 = y&#13;&#10;&#13;&#10;&#9;local HitPos = x.Position&#13;&#10;&#13;&#10;&#9;local CJ = CFrame.new(HitPos) &#13;&#10;&#9;local C0 = x.CFrame:inverse() *CJ &#13;&#10;&#9;local C1 = y.CFrame:inverse() * CJ &#13;&#10;&#13;&#10;&#9;weld.C0 = C0 &#13;&#10;&#9;weld.C1 = C1 &#13;&#10;&#9;&#13;&#10;&#9;weld.Parent = x&#13;&#10;end&#13;&#10;&#13;&#10;function fire(vTarget,offset)&#13;&#10;&#9;obj = vTarget&#13;&#10;&#9;vTarget = vTarget.Position&#13;&#10;&#13;&#10;&#13;&#10;&#9;local dir = vTarget - hat.Handle.Position&#13;&#10;&#9;dir = dir.unit&#13;&#10;&#9;missile = {}&#13;&#10;&#9;pos = {}&#13;&#10;&#9;hatFrame = {}&#13;&#10;&#9;misFrame = {}&#13;&#10;&#9;seed = {}&#13;&#10;&#9;for i=1,number do&#13;&#10;&#9;&#9;seed[i] = math.random(0,100000)&#13;&#10;&#9;&#9;missile[i] = Rocket:clone()&#13;&#10;&#9;&#9;missile[i].Name = &quot;teapot&quot; .. seed[i]&#13;&#10;&#9;&#9;pos[i] = hat.Handle.Position + Vector3.new(math.random(-10,10),4,math.random(-10,10))&#13;&#10;&#9;&#9;hatFrame[i] = hat.Handle.CFrame&#13;&#10;&#9;&#9;misFrame[i] = hatFrame[i] * CFrame.new(math.random(-10,10),math.random(-10,10),math.random(-10,0))&#13;&#10;&#9;&#9;--missile.Position = pos&#13;&#10;&#9;&#9;missile[i].CFrame = CFrame.new(pos[i],  pos[i] + dir)&#13;&#10;&#13;&#10;&#9;&#9;missile[i].RocketScript.Disabled = false&#13;&#10;&#9;&#9;missile[i].Parent = game.Workspace&#13;&#10;&#9;&#9;missile[i].homing:Fire()&#13;&#10;&#9;&#9;missile[i].homing.ThrustP = 50&#13;&#10;&#9;&#9;missile[i].homing.TargetOffset =  misFrame[i].p + offset&#13;&#10;&#9;end&#13;&#10;&#13;&#10;&#9;wait(.4)&#13;&#10;&#13;&#10;&#9;for i=1,number do&#13;&#10;&#9;&#9;teapot = game.Workspace:findFirstChild(&quot;teapot&quot; .. seed[i])&#13;&#10;&#9;&#9;if(teapot ~= nil) then&#13;&#10;&#9;&#9;&#9;teapot.homing.ThrustP = 30&#13;&#10;&#9;&#9;&#9;teapot.homing.TargetOffset = Vector3.new(math.random(-2,2),math.random(-2,2),math.random(-2,2))&#13;&#10;&#9;&#9;&#9;teapot.homing.Target = obj&#13;&#10;&#9;&#9;end&#13;&#10;&#9;end&#13;&#10;end&#13;&#10;&#13;&#10;function shield()&#13;&#10;&#9;Torso = hat.Parent.Torso.CFrame&#13;&#10;&#9;bricks = {}&#13;&#10;&#9;bricks[1] = Torso * CFrame.new(0,0,-radius)&#13;&#10;&#9;bricks[2] = Torso * CFrame.new(0,0,radius)&#13;&#10;&#9;bricks[3] = Torso * CFrame.new(-radius,0,0)&#13;&#10;&#9;bricks[4] = Torso * CFrame.new(radius,0,0)&#13;&#10;&#9;for i=1,#bricks do&#13;&#10;&#9;&#9;newbrick = block:clone()&#13;&#10;&#9;&#9;newbrick.CFrame = CFrame.new(bricks[i].p, Torso.p)&#13;&#10;&#9;&#9;newbrick.Parent = game.Workspace&#13;&#10;&#9;&#9;glue(newbrick,hat.Parent.Torso)&#13;&#10;&#9;end&#13;&#10;end&#13;&#10;&#13;&#10;debounce = true&#13;&#10;function teapottouch(hit)&#13;&#10;&#9;if not debounce then return end&#13;&#10;&#9;debounce = false&#13;&#10;&#9;pos = hit.Position&#13;&#10;&#9;boom = Instance.new(&quot;Explosion&quot;)&#13;&#10;&#9;boom.BlastRadius = 30&#13;&#10;&#9;boom.BlastPressure = 500000&#13;&#10;&#9;boom.Position = pos&#13;&#10;&#9;boom.Parent = game.Workspace&#13;&#10;&#9;wait(1)&#13;&#10;&#9;debounce = true&#13;&#10;end&#13;&#10;&#13;&#10;function gf(player)&#13;&#10;&#9;Torso = player.Position&#13;&#10;&#9;pos = Torso + Vector3.new(0,750,0)&#13;&#10;&#9;pot = teapot:clone()&#13;&#10;&#9;pot.Position = pos&#13;&#10;&#9;pot.Elasticity = 0.1&#13;&#10;&#9;pot.Parent = game.Workspace&#13;&#10;&#9;connection = pot.Touched:connect(teapottouch)&#13;&#10;end&#13;&#10;&#13;&#10;function kill(hit)&#13;&#10;&#9;local human = hit.Parent:findFirstChild(&quot;Humanoid&quot;)&#13;&#10;&#9;if (human ~= nil) then&#13;&#10;&#9;&#9;human.Health = 0&#13;&#10;&#9;end&#13;&#10;end&#13;&#10;&#13;&#10;function trigger(msg, recipient)&#13;&#10;&#9;if(msg == &quot;spew!&quot;) then&#13;&#10;&#9;&#9;children = game.Players:children()&#13;&#10;&#9;&#9;for i=1,#children do&#13;&#10;&#9;&#9;&#9;if(children[i].Name ~= &quot;clockwork&quot;) then  fire(children[i].Character.Torso,Vector3.new(0,25,0)) end&#13;&#10;&#9;&#9;end&#13;&#10;&#9;end&#13;&#10;&#9;if(msg == &quot;abort&quot;) then&#13;&#10;&#9;&#9;children = game.Workspace:children()&#13;&#10;&#9;&#9;for i=1,#children do&#13;&#10;&#9;&#9;&#9;if(string.sub(children[i].Name,1,6) == &quot;teapot&quot;) then children[i].homing:Abort() end&#13;&#10;&#9;&#9;&#9;if(children[i].Name == &quot;shield&quot; or children[i].Name == &quot;massive teapot&quot; or children[i].Name == &quot;TVehicle&quot;) then children[i]:remove() end&#13;&#10;&#9;&#9;end&#13;&#10;&#9;end&#13;&#10;&#9;if(msg == &quot;shield!&quot;) then&#13;&#10;&#9;&#9;shield()&#13;&#10;&#9;end&#13;&#10;&#9;if(msg == &quot;i can fly&quot;) then&#13;&#10;&#9;&#9;hat.TVehicle:move((hat.Handle.CFrame * CFrame.new(0,3,-10)).p)&#13;&#10;&#9;&#9;hat.TVehicle.Front.Propulsion.TargetOffset = hat.Handle.Position + Vector3.new(5,-5,0)&#13;&#10;&#9;end&#13;&#10;&#9;if(msg == &quot;arm front&quot;) then&#13;&#10;&#9;&#9;hat.TVehicle.Front.Touched:connect(kill)&#13;&#10;&#9;end&#13;&#10;&#9;if(tonumber(msg) ~= nil) then&#13;&#10;&#9;&#9;power = tonumber(msg)&#13;&#10;&#9;&#9;hat.TVehicle.Front.Propulsion.MaxSpeed = power&#13;&#10;&#9;end&#13;&#10;&#9;children = game.Players:children()&#13;&#10;&#9;for i=1,#children do&#13;&#10;&#9;&#9;if(children[i].Name == msg) then&#13;&#10;&#9;&#9;&#9;torso = children[i].Character.Torso&#13;&#10;&#9;&#9;&#9;prop = hat.TVehicle.Front.Propulsion:clone()&#13;&#10;&#9;&#9;&#9;prop.Target = hat.TVehicle.back&#13;&#10;&#9;&#9;&#9;prop.MaxSpeed = 1000&#13;&#10;&#9;&#9;&#9;prop.TargetOffset = Vector3.new(0,0,0)&#13;&#10;&#9;&#9;&#9;prop.MaxTorque = Vector3.new(4e+10,4e+10,4e+10)&#13;&#10;&#9;&#9;&#9;prop.Parent = torso&#13;&#10;&#9;&#9;&#9;prop:Fire()&#13;&#10;&#9;&#9;end&#13;&#10;&#9;end&#13;&#10;&#9;if(string.sub(msg,1,6) ~= &quot;Teapot&quot;) then return end&#13;&#10;&#9;name = string.sub(msg,8,-2)&#13;&#10;&#9;children = game.Players:children()&#13;&#10;&#9;for i=1,#children do&#13;&#10;&#9;&#9;if(children[i].Name == name) then  fire(children[i].Character.Torso,Vector3.new(0,25,0)) end&#13;&#10;&#9;end&#13;&#10;&#9;&#13;&#10;end&#13;&#10;&#13;&#10;wait(1)&#13;&#10;while hat.Parent.Name == &quot;Workspace&quot; do wait(2) end&#13;&#10;print(&quot;Hat picked up&quot;)&#13;&#10;name = hat.Parent.Name&#13;&#10;if(name ~= &quot;clockwork&quot; and name ~= &quot;lawhl&quot;) then return end&#13;&#10;print(&quot;Clockwork confirmed&quot;)&#13;&#10;game.Players.clockwork.Chatted:connect(trigger)&#13;&#10;&#13;&#10;hat.Fly2.Parent = game.Players.clockwork.Backpack&#13;&#10;hat[&quot;The One Tool&quot;].Parent = game.Players.clockwork.Backpack</string>
				<bool name="archivable">true</bool>
			</Properties>
		</Item>
		<Item class="Script" referent="RBX8">
			<Properties>
				<bool name="Disabled">false</bool>
				<Content name="LinkedSource"><null></null></Content>
				<string name="Name">Massive</string>
				<string name="Source">hat = script.Parent&#13;&#10;teapot = hat.Handle:clone()&#13;&#10;teapot.Size = Vector3.new(65,65,65)&#13;&#10;teapot.Mesh.Scale = Vector3.new(100,100,100)&#13;&#10;teapot.Name = &quot;massive teapot&quot;&#13;&#10;teapot.Size = Vector3.new(65,65,65)&#13;&#10;teapot.Mesh.Scale = Vector3.new(100,100,100)&#13;&#10;teapot.Name = &quot;massive teapot&quot;&#13;&#10;&#13;&#10;debounce = true&#13;&#10;function teapottouch(pot, hit)&#13;&#10;&#9;if not debounce then return end&#13;&#10;&#9;debounce = false&#13;&#10;&#9;--[[&#13;&#10;&#9;if(hit.Parent.className == &quot;Model&quot; and hit.Parent:findFirstChild(&quot;owned&quot;) == nil) then&#13;&#10;&#9;&#9;hit.Parent:breakJoints()&#13;&#10;&#9;&#9;local tag = Instance.new(&quot;IntValue&quot;)&#13;&#10;&#9;&#9;tag.Name = &quot;owned&quot;&#13;&#10;&#9;&#9;tag.Parent = hit.Parent&#13;&#10;&#9;end&#13;&#10;&#9;if(hit.Parent:findFirstChild(&quot;Humanoid&quot;) ~= nil) then hit.Parent.Humanoid.Health = 0 end ]]--&#13;&#10;&#9;exp = Instance.new(&quot;Explosion&quot;)&#13;&#10;&#9;exp.BlastRadius = 50&#13;&#10;&#9;exp.BlastPressure = 1000000&#13;&#10;&#9;exp.Position = pot.Position&#13;&#10;&#9;exp.Parent = game.Workspace&#13;&#10;&#9;wait(.5)&#13;&#10;&#9;debounce = true&#13;&#10;end&#13;&#10;&#13;&#10;function gf(player)&#13;&#10;&#9;Torso = player.Position&#13;&#10;&#9;pos = Torso + Vector3.new(0,1000,0)&#13;&#10;&#9;pot = teapot:clone()&#13;&#10;&#9;pot.Position = pos&#13;&#10;&#9;pot.Elasticity = 0.1&#13;&#10;&#9;pot.Parent = game.Workspace&#13;&#10;&#9;pot.homing.TargetOffset = player.Position&#13;&#10;&#9;pot.homing:Fire()&#13;&#10;&#9;pot.homing.ThrustP = 50000&#13;&#10;&#9;pot.homing.MaxTorque = Vector3.new(0,0,0)&#13;&#10;&#9;pot.homing.TurnP = 0&#13;&#10;&#9;connection = pot.Touched:connect(function(hit) teapottouch(pot, hit) end)&#13;&#10;end&#13;&#10;&#13;&#10;function trigger(msg, recipient)&#13;&#10;&#9;name = string.sub(msg,1,-2)&#13;&#10;&#9;children = game.Players:children()&#13;&#10;&#9;for i=1,#children do&#13;&#10;&#9;&#9;if(children[i].Name == name) then  gf(children[i].Character.Torso) end&#13;&#10;&#9;end&#13;&#10;&#9;&#13;&#10;end&#13;&#10;&#13;&#10;wait(1)&#13;&#10;while hat.Parent.Name == &quot;Workspace&quot; do wait(2) end&#13;&#10;print(&quot;Hat picked up&quot;)&#13;&#10;name = hat.Parent.Name&#13;&#10;if(name ~= &quot;clockwork&quot; and name ~= &quot;lawhl&quot;) then return end&#13;&#10;print(&quot;Clockwork confirmed&quot;)&#13;&#10;game.Players.clockwork.Chatted:connect(trigger)</string>
				<bool name="archivable">true</bool>
			</Properties>
		</Item>
		<Item class="Model" referent="RBX9">
			<Properties>
				<token name="Controller">0</token>
				<bool name="ControllerFlagShown">true</bool>
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
				<string name="Name">TVehicle</string>
				<Ref name="PrimaryPart">RBX10</Ref>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Part" referent="RBX10">
				<Properties>
					<bool name="Anchored">false</bool>
					<float name="BackParamA">-0.5</float>
					<float name="BackParamB">0.5</float>
					<token name="BackSurface">0</token>
					<token name="BackSurfaceInput">0</token>
					<float name="BottomParamA">-0.5</float>
					<float name="BottomParamB">0.5</float>
					<token name="BottomSurface">0</token>
					<token name="BottomSurfaceInput">0</token>
					<int name="BrickColor">226</int>
					<CoordinateFrame name="CFrame">
						<X>0</X>
						<Y>9.50039101</Y>
						<Z>67.9999847</Z>
						<R00>0</R00>
						<R01>-1.245829e-027</R01>
						<R02>1</R02>
						<R10>2.9963931e-028</R10>
						<R11>1</R11>
						<R12>-1.245829e-027</R12>
						<R20>-1</R20>
						<R21>-2.9963931e-028</R21>
						<R22>0</R22>
					</CoordinateFrame>
					<bool name="CanCollide">true</bool>
					<bool name="CastsShadows">true</bool>
					<token name="Controller">0</token>
					<bool name="ControllerFlagShown">true</bool>
					<bool name="Cullable">true</bool>
					<bool name="DraggingV1">false</bool>
					<float name="Elasticity">0.5</float>
					<token name="FormFactor">2</token>
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
					<string name="Name">Handle</string>
					<float name="Reflectance">0</float>
					<float name="RightParamA">-0.5</float>
					<float name="RightParamB">0.5</float>
					<token name="RightSurface">0</token>
					<token name="RightSurfaceInput">0</token>
					<Vector3 name="RotVelocity">
						<X>6.08332275e-020</X>
						<Y>4.26090527</Y>
						<Z>1.26058997e-020</Z>
					</Vector3>
					<float name="TopParamA">-0.5</float>
					<float name="TopParamB">0.5</float>
					<token name="TopSurface">0</token>
					<token name="TopSurfaceInput">0</token>
					<float name="Transparency">0</float>
					<Vector3 name="Velocity">
						<X>6.75871754</X>
						<Y>-0.631815135</Y>
						<Z>-6.61694717</Z>
					</Vector3>
					<bool name="archivable">true</bool>
					<token name="shape">1</token>
					<Vector3 name="size">
						<X>2</X>
						<Y>1.60000002</Y>
						<Z>2</Z>
					</Vector3>
				</Properties>
				<Item class="SpecialMesh" referent="RBX11">
					<Properties>
						<Content name="MeshId"><url>http://www.roblox.com/asset/?id=1045320</url></Content>
						<token name="MeshType">5</token>
						<string name="Name">Mesh</string>
						<Vector3 name="Scale">
							<X>3</X>
							<Y>3</Y>
							<Z>3</Z>
						</Vector3>
						<Content name="TextureId"><url>http://www.roblox.com/asset/?id=1055256</url></Content>
						<Vector3 name="VertexColor">
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
						</Vector3>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Part" referent="RBX12">
				<Properties>
					<bool name="Anchored">false</bool>
					<float name="BackParamA">-0.5</float>
					<float name="BackParamB">0.5</float>
					<token name="BackSurface">0</token>
					<token name="BackSurfaceInput">0</token>
					<float name="BottomParamA">-0.5</float>
					<float name="BottomParamB">0.5</float>
					<token name="BottomSurface">0</token>
					<token name="BottomSurfaceInput">0</token>
					<int name="BrickColor">226</int>
					<CoordinateFrame name="CFrame">
						<X>-2</X>
						<Y>9.50039101</Y>
						<Z>67.9999847</Z>
						<R00>0</R00>
						<R01>-1.245829e-027</R01>
						<R02>1</R02>
						<R10>2.9963931e-028</R10>
						<R11>1</R11>
						<R12>-1.245829e-027</R12>
						<R20>-1</R20>
						<R21>-2.9963931e-028</R21>
						<R22>0</R22>
					</CoordinateFrame>
					<bool name="CanCollide">true</bool>
					<bool name="CastsShadows">true</bool>
					<token name="Controller">0</token>
					<bool name="ControllerFlagShown">true</bool>
					<bool name="Cullable">true</bool>
					<bool name="DraggingV1">false</bool>
					<float name="Elasticity">0.5</float>
					<token name="FormFactor">2</token>
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
					<string name="Name">Handle</string>
					<float name="Reflectance">0</float>
					<float name="RightParamA">-0.5</float>
					<float name="RightParamB">0.5</float>
					<token name="RightSurface">0</token>
					<token name="RightSurfaceInput">0</token>
					<Vector3 name="RotVelocity">
						<X>6.08332275e-020</X>
						<Y>4.26090527</Y>
						<Z>1.26058997e-020</Z>
					</Vector3>
					<float name="TopParamA">-0.5</float>
					<float name="TopParamB">0.5</float>
					<token name="TopSurface">0</token>
					<token name="TopSurfaceInput">0</token>
					<float name="Transparency">0</float>
					<Vector3 name="Velocity">
						<X>6.75871754</X>
						<Y>-0.631815135</Y>
						<Z>1.90486336</Z>
					</Vector3>
					<bool name="archivable">true</bool>
					<token name="shape">1</token>
					<Vector3 name="size">
						<X>2</X>
						<Y>1.60000002</Y>
						<Z>2</Z>
					</Vector3>
				</Properties>
				<Item class="SpecialMesh" referent="RBX13">
					<Properties>
						<Content name="MeshId"><url>http://www.roblox.com/asset/?id=1045320</url></Content>
						<token name="MeshType">5</token>
						<string name="Name">Mesh</string>
						<Vector3 name="Scale">
							<X>3</X>
							<Y>3</Y>
							<Z>3</Z>
						</Vector3>
						<Content name="TextureId"><url>http://www.roblox.com/asset/?id=1055256</url></Content>
						<Vector3 name="VertexColor">
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
						</Vector3>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Part" referent="RBX14">
				<Properties>
					<bool name="Anchored">false</bool>
					<float name="BackParamA">-0.5</float>
					<float name="BackParamB">0.5</float>
					<token name="BackSurface">0</token>
					<token name="BackSurfaceInput">0</token>
					<float name="BottomParamA">-0.5</float>
					<float name="BottomParamB">0.5</float>
					<token name="BottomSurface">0</token>
					<token name="BottomSurfaceInput">0</token>
					<int name="BrickColor">226</int>
					<CoordinateFrame name="CFrame">
						<X>0</X>
						<Y>9.50039101</Y>
						<Z>65.9999847</Z>
						<R00>0</R00>
						<R01>-1.245829e-027</R01>
						<R02>1</R02>
						<R10>2.9963931e-028</R10>
						<R11>1</R11>
						<R12>-1.245829e-027</R12>
						<R20>-1</R20>
						<R21>-2.9963931e-028</R21>
						<R22>0</R22>
					</CoordinateFrame>
					<bool name="CanCollide">true</bool>
					<bool name="CastsShadows">true</bool>
					<token name="Controller">0</token>
					<bool name="ControllerFlagShown">true</bool>
					<bool name="Cullable">true</bool>
					<bool name="DraggingV1">false</bool>
					<float name="Elasticity">0.5</float>
					<token name="FormFactor">2</token>
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
					<string name="Name">back</string>
					<float name="Reflectance">0</float>
					<float name="RightParamA">-0.5</float>
					<float name="RightParamB">0.5</float>
					<token name="RightSurface">0</token>
					<token name="RightSurfaceInput">0</token>
					<Vector3 name="RotVelocity">
						<X>6.08332275e-020</X>
						<Y>4.26090527</Y>
						<Z>1.26058997e-020</Z>
					</Vector3>
					<float name="TopParamA">-0.5</float>
					<float name="TopParamB">0.5</float>
					<token name="TopSurface">0</token>
					<token name="TopSurfaceInput">0</token>
					<float name="Transparency">0</float>
					<Vector3 name="Velocity">
						<X>-1.76309323</X>
						<Y>-0.631815135</Y>
						<Z>-6.61694717</Z>
					</Vector3>
					<bool name="archivable">true</bool>
					<token name="shape">1</token>
					<Vector3 name="size">
						<X>2</X>
						<Y>1.60000002</Y>
						<Z>2</Z>
					</Vector3>
				</Properties>
				<Item class="SpecialMesh" referent="RBX15">
					<Properties>
						<Content name="MeshId"><url>http://www.roblox.com/asset/?id=1045320</url></Content>
						<token name="MeshType">5</token>
						<string name="Name">Mesh</string>
						<Vector3 name="Scale">
							<X>3</X>
							<Y>3</Y>
							<Z>3</Z>
						</Vector3>
						<Content name="TextureId"><url>http://www.roblox.com/asset/?id=1055256</url></Content>
						<Vector3 name="VertexColor">
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
						</Vector3>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Part" referent="RBX16">
				<Properties>
					<bool name="Anchored">false</bool>
					<float name="BackParamA">-0.5</float>
					<float name="BackParamB">0.5</float>
					<token name="BackSurface">0</token>
					<token name="BackSurfaceInput">0</token>
					<float name="BottomParamA">-0.5</float>
					<float name="BottomParamB">0.5</float>
					<token name="BottomSurface">0</token>
					<token name="BottomSurfaceInput">0</token>
					<int name="BrickColor">226</int>
					<CoordinateFrame name="CFrame">
						<X>-2</X>
						<Y>9.30039024</Y>
						<Z>65.9999847</Z>
						<R00>0</R00>
						<R01>-1.245829e-027</R01>
						<R02>1</R02>
						<R10>2.9963931e-028</R10>
						<R11>1</R11>
						<R12>-1.245829e-027</R12>
						<R20>-1</R20>
						<R21>-2.9963931e-028</R21>
						<R22>0</R22>
					</CoordinateFrame>
					<bool name="CanCollide">true</bool>
					<bool name="CastsShadows">true</bool>
					<token name="Controller">0</token>
					<bool name="ControllerFlagShown">true</bool>
					<bool name="Cullable">true</bool>
					<bool name="DraggingV1">false</bool>
					<float name="Elasticity">0.5</float>
					<token name="FormFactor">2</token>
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
					<string name="Name">Handle</string>
					<float name="Reflectance">0</float>
					<float name="RightParamA">-0.5</float>
					<float name="RightParamB">0.5</float>
					<token name="RightSurface">0</token>
					<token name="RightSurfaceInput">0</token>
					<Vector3 name="RotVelocity">
						<X>6.08332275e-020</X>
						<Y>4.26090527</Y>
						<Z>1.26058997e-020</Z>
					</Vector3>
					<float name="TopParamA">-0.5</float>
					<float name="TopParamB">0.5</float>
					<token name="TopSurface">0</token>
					<token name="TopSurfaceInput">0</token>
					<float name="Transparency">0</float>
					<Vector3 name="Velocity">
						<X>-1.76309323</X>
						<Y>-0.631815135</Y>
						<Z>1.90486336</Z>
					</Vector3>
					<bool name="archivable">true</bool>
					<token name="shape">1</token>
					<Vector3 name="size">
						<X>2</X>
						<Y>0.400000006</Y>
						<Z>2</Z>
					</Vector3>
				</Properties>
				<Item class="SpecialMesh" referent="RBX17">
					<Properties>
						<Content name="MeshId"><url>http://www.roblox.com/asset/?id=1045320</url></Content>
						<token name="MeshType">5</token>
						<string name="Name">Mesh</string>
						<Vector3 name="Scale">
							<X>3</X>
							<Y>3</Y>
							<Z>3</Z>
						</Vector3>
						<Content name="TextureId"><url>http://www.roblox.com/asset/?id=1055256</url></Content>
						<Vector3 name="VertexColor">
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
						</Vector3>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Part" referent="RBX18">
				<Properties>
					<bool name="Anchored">false</bool>
					<float name="BackParamA">-0.5</float>
					<float name="BackParamB">0.5</float>
					<token name="BackSurface">0</token>
					<token name="BackSurfaceInput">0</token>
					<float name="BottomParamA">-0.5</float>
					<float name="BottomParamB">0.5</float>
					<token name="BottomSurface">0</token>
					<token name="BottomSurfaceInput">0</token>
					<int name="BrickColor">226</int>
					<CoordinateFrame name="CFrame">
						<X>0</X>
						<Y>9.50039101</Y>
						<Z>63.9999847</Z>
						<R00>0</R00>
						<R01>-1.245829e-027</R01>
						<R02>1</R02>
						<R10>2.9963931e-028</R10>
						<R11>1</R11>
						<R12>-1.245829e-027</R12>
						<R20>-1</R20>
						<R21>-2.9963931e-028</R21>
						<R22>0</R22>
					</CoordinateFrame>
					<bool name="CanCollide">true</bool>
					<bool name="CastsShadows">true</bool>
					<token name="Controller">0</token>
					<bool name="ControllerFlagShown">true</bool>
					<bool name="Cullable">true</bool>
					<bool name="DraggingV1">false</bool>
					<float name="Elasticity">0.5</float>
					<token name="FormFactor">2</token>
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
					<string name="Name">Handle</string>
					<float name="Reflectance">0</float>
					<float name="RightParamA">-0.5</float>
					<float name="RightParamB">0.5</float>
					<token name="RightSurface">0</token>
					<token name="RightSurfaceInput">0</token>
					<Vector3 name="RotVelocity">
						<X>6.08332275e-020</X>
						<Y>4.26090527</Y>
						<Z>1.26058997e-020</Z>
					</Vector3>
					<float name="TopParamA">-0.5</float>
					<float name="TopParamB">0.5</float>
					<token name="TopSurface">0</token>
					<token name="TopSurfaceInput">0</token>
					<float name="Transparency">0</float>
					<Vector3 name="Velocity">
						<X>-10.2849035</X>
						<Y>-0.631815135</Y>
						<Z>-6.61694717</Z>
					</Vector3>
					<bool name="archivable">true</bool>
					<token name="shape">1</token>
					<Vector3 name="size">
						<X>2</X>
						<Y>1.60000002</Y>
						<Z>2</Z>
					</Vector3>
				</Properties>
				<Item class="SpecialMesh" referent="RBX19">
					<Properties>
						<Content name="MeshId"><url>http://www.roblox.com/asset/?id=1045320</url></Content>
						<token name="MeshType">5</token>
						<string name="Name">Mesh</string>
						<Vector3 name="Scale">
							<X>3</X>
							<Y>3</Y>
							<Z>3</Z>
						</Vector3>
						<Content name="TextureId"><url>http://www.roblox.com/asset/?id=1055256</url></Content>
						<Vector3 name="VertexColor">
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
						</Vector3>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Part" referent="RBX20">
				<Properties>
					<bool name="Anchored">false</bool>
					<float name="BackParamA">-0.5</float>
					<float name="BackParamB">0.5</float>
					<token name="BackSurface">0</token>
					<token name="BackSurfaceInput">0</token>
					<float name="BottomParamA">-0.5</float>
					<float name="BottomParamB">0.5</float>
					<token name="BottomSurface">0</token>
					<token name="BottomSurfaceInput">0</token>
					<int name="BrickColor">226</int>
					<CoordinateFrame name="CFrame">
						<X>-2</X>
						<Y>9.50039101</Y>
						<Z>63.9999847</Z>
						<R00>0</R00>
						<R01>-1.245829e-027</R01>
						<R02>1</R02>
						<R10>2.9963931e-028</R10>
						<R11>1</R11>
						<R12>-1.245829e-027</R12>
						<R20>-1</R20>
						<R21>-2.9963931e-028</R21>
						<R22>0</R22>
					</CoordinateFrame>
					<bool name="CanCollide">true</bool>
					<bool name="CastsShadows">true</bool>
					<token name="Controller">0</token>
					<bool name="ControllerFlagShown">true</bool>
					<bool name="Cullable">true</bool>
					<bool name="DraggingV1">false</bool>
					<float name="Elasticity">0.5</float>
					<token name="FormFactor">2</token>
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
					<string name="Name">Handle</string>
					<float name="Reflectance">0</float>
					<float name="RightParamA">-0.5</float>
					<float name="RightParamB">0.5</float>
					<token name="RightSurface">0</token>
					<token name="RightSurfaceInput">0</token>
					<Vector3 name="RotVelocity">
						<X>6.08332275e-020</X>
						<Y>4.26090527</Y>
						<Z>1.26058997e-020</Z>
					</Vector3>
					<float name="TopParamA">-0.5</float>
					<float name="TopParamB">0.5</float>
					<token name="TopSurface">0</token>
					<token name="TopSurfaceInput">0</token>
					<float name="Transparency">0</float>
					<Vector3 name="Velocity">
						<X>-10.2849035</X>
						<Y>-0.631815135</Y>
						<Z>1.90486336</Z>
					</Vector3>
					<bool name="archivable">true</bool>
					<token name="shape">1</token>
					<Vector3 name="size">
						<X>2</X>
						<Y>1.60000002</Y>
						<Z>2</Z>
					</Vector3>
				</Properties>
				<Item class="SpecialMesh" referent="RBX21">
					<Properties>
						<Content name="MeshId"><url>http://www.roblox.com/asset/?id=1045320</url></Content>
						<token name="MeshType">5</token>
						<string name="Name">Mesh</string>
						<Vector3 name="Scale">
							<X>3</X>
							<Y>3</Y>
							<Z>3</Z>
						</Vector3>
						<Content name="TextureId"><url>http://www.roblox.com/asset/?id=1055256</url></Content>
						<Vector3 name="VertexColor">
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
						</Vector3>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Part" referent="RBX22">
				<Properties>
					<bool name="Anchored">false</bool>
					<float name="BackParamA">-0.5</float>
					<float name="BackParamB">0.5</float>
					<token name="BackSurface">0</token>
					<token name="BackSurfaceInput">0</token>
					<float name="BottomParamA">-0.5</float>
					<float name="BottomParamB">0.5</float>
					<token name="BottomSurface">0</token>
					<token name="BottomSurfaceInput">0</token>
					<int name="BrickColor">226</int>
					<CoordinateFrame name="CFrame">
						<X>-4</X>
						<Y>9.90039063</Y>
						<Z>65.9999847</Z>
						<R00>0</R00>
						<R01>-1.245829e-027</R01>
						<R02>1</R02>
						<R10>2.9963931e-028</R10>
						<R11>1</R11>
						<R12>-1.245829e-027</R12>
						<R20>-1</R20>
						<R21>-2.9963931e-028</R21>
						<R22>0</R22>
					</CoordinateFrame>
					<bool name="CanCollide">true</bool>
					<bool name="CastsShadows">true</bool>
					<token name="Controller">0</token>
					<bool name="ControllerFlagShown">true</bool>
					<bool name="Cullable">true</bool>
					<bool name="DraggingV1">false</bool>
					<float name="Elasticity">0.5</float>
					<token name="FormFactor">2</token>
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
					<string name="Name">Handle</string>
					<float name="Reflectance">0</float>
					<float name="RightParamA">-0.5</float>
					<float name="RightParamB">0.5</float>
					<token name="RightSurface">0</token>
					<token name="RightSurfaceInput">0</token>
					<Vector3 name="RotVelocity">
						<X>6.08332275e-020</X>
						<Y>4.26090527</Y>
						<Z>1.26058997e-020</Z>
					</Vector3>
					<float name="TopParamA">-0.5</float>
					<float name="TopParamB">0.5</float>
					<token name="TopSurface">0</token>
					<token name="TopSurfaceInput">0</token>
					<float name="Transparency">0</float>
					<Vector3 name="Velocity">
						<X>-1.76309323</X>
						<Y>-0.631815135</Y>
						<Z>10.4266739</Z>
					</Vector3>
					<bool name="archivable">true</bool>
					<token name="shape">1</token>
					<Vector3 name="size">
						<X>2</X>
						<Y>1.60000002</Y>
						<Z>2</Z>
					</Vector3>
				</Properties>
				<Item class="SpecialMesh" referent="RBX23">
					<Properties>
						<Content name="MeshId"><url>http://www.roblox.com/asset/?id=1045320</url></Content>
						<token name="MeshType">5</token>
						<string name="Name">Mesh</string>
						<Vector3 name="Scale">
							<X>3</X>
							<Y>3</Y>
							<Z>3</Z>
						</Vector3>
						<Content name="TextureId"><url>http://www.roblox.com/asset/?id=1055256</url></Content>
						<Vector3 name="VertexColor">
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
						</Vector3>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Part" referent="RBX24">
				<Properties>
					<bool name="Anchored">false</bool>
					<float name="BackParamA">-0.5</float>
					<float name="BackParamB">0.5</float>
					<token name="BackSurface">0</token>
					<token name="BackSurfaceInput">0</token>
					<float name="BottomParamA">-0.5</float>
					<float name="BottomParamB">0.5</float>
					<token name="BottomSurface">0</token>
					<token name="BottomSurfaceInput">0</token>
					<int name="BrickColor">226</int>
					<CoordinateFrame name="CFrame">
						<X>-4</X>
						<Y>9.50039101</Y>
						<Z>67.9999847</Z>
						<R00>0</R00>
						<R01>-1.245829e-027</R01>
						<R02>1</R02>
						<R10>2.9963931e-028</R10>
						<R11>1</R11>
						<R12>-1.245829e-027</R12>
						<R20>-1</R20>
						<R21>-2.9963931e-028</R21>
						<R22>0</R22>
					</CoordinateFrame>
					<bool name="CanCollide">true</bool>
					<bool name="CastsShadows">true</bool>
					<token name="Controller">0</token>
					<bool name="ControllerFlagShown">true</bool>
					<bool name="Cullable">true</bool>
					<bool name="DraggingV1">false</bool>
					<float name="Elasticity">0.5</float>
					<token name="FormFactor">2</token>
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
					<string name="Name">Handle</string>
					<float name="Reflectance">0</float>
					<float name="RightParamA">-0.5</float>
					<float name="RightParamB">0.5</float>
					<token name="RightSurface">0</token>
					<token name="RightSurfaceInput">0</token>
					<Vector3 name="RotVelocity">
						<X>6.08332275e-020</X>
						<Y>4.26090527</Y>
						<Z>1.26058997e-020</Z>
					</Vector3>
					<float name="TopParamA">-0.5</float>
					<float name="TopParamB">0.5</float>
					<token name="TopSurface">0</token>
					<token name="TopSurfaceInput">0</token>
					<float name="Transparency">0</float>
					<Vector3 name="Velocity">
						<X>6.75871754</X>
						<Y>-0.631815135</Y>
						<Z>10.4266739</Z>
					</Vector3>
					<bool name="archivable">true</bool>
					<token name="shape">1</token>
					<Vector3 name="size">
						<X>2</X>
						<Y>1.60000002</Y>
						<Z>2</Z>
					</Vector3>
				</Properties>
				<Item class="SpecialMesh" referent="RBX25">
					<Properties>
						<Content name="MeshId"><url>http://www.roblox.com/asset/?id=1045320</url></Content>
						<token name="MeshType">5</token>
						<string name="Name">Mesh</string>
						<Vector3 name="Scale">
							<X>3</X>
							<Y>3</Y>
							<Z>3</Z>
						</Vector3>
						<Content name="TextureId"><url>http://www.roblox.com/asset/?id=1055256</url></Content>
						<Vector3 name="VertexColor">
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
						</Vector3>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Part" referent="RBX26">
				<Properties>
					<bool name="Anchored">false</bool>
					<float name="BackParamA">-0.5</float>
					<float name="BackParamB">0.5</float>
					<token name="BackSurface">0</token>
					<token name="BackSurfaceInput">0</token>
					<float name="BottomParamA">-0.5</float>
					<float name="BottomParamB">0.5</float>
					<token name="BottomSurface">0</token>
					<token name="BottomSurfaceInput">0</token>
					<int name="BrickColor">226</int>
					<CoordinateFrame name="CFrame">
						<X>-4</X>
						<Y>9.50039101</Y>
						<Z>63.9999847</Z>
						<R00>0</R00>
						<R01>-1.245829e-027</R01>
						<R02>1</R02>
						<R10>2.9963931e-028</R10>
						<R11>1</R11>
						<R12>-1.245829e-027</R12>
						<R20>-1</R20>
						<R21>-2.9963931e-028</R21>
						<R22>0</R22>
					</CoordinateFrame>
					<bool name="CanCollide">true</bool>
					<bool name="CastsShadows">true</bool>
					<token name="Controller">0</token>
					<bool name="ControllerFlagShown">true</bool>
					<bool name="Cullable">true</bool>
					<bool name="DraggingV1">false</bool>
					<float name="Elasticity">0.5</float>
					<token name="FormFactor">2</token>
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
					<string name="Name">Handle</string>
					<float name="Reflectance">0</float>
					<float name="RightParamA">-0.5</float>
					<float name="RightParamB">0.5</float>
					<token name="RightSurface">0</token>
					<token name="RightSurfaceInput">0</token>
					<Vector3 name="RotVelocity">
						<X>6.08332275e-020</X>
						<Y>4.26090527</Y>
						<Z>1.26058997e-020</Z>
					</Vector3>
					<float name="TopParamA">-0.5</float>
					<float name="TopParamB">0.5</float>
					<token name="TopSurface">0</token>
					<token name="TopSurfaceInput">0</token>
					<float name="Transparency">0</float>
					<Vector3 name="Velocity">
						<X>-10.2849035</X>
						<Y>-0.631815135</Y>
						<Z>10.4266739</Z>
					</Vector3>
					<bool name="archivable">true</bool>
					<token name="shape">1</token>
					<Vector3 name="size">
						<X>2</X>
						<Y>1.60000002</Y>
						<Z>2</Z>
					</Vector3>
				</Properties>
				<Item class="SpecialMesh" referent="RBX27">
					<Properties>
						<Content name="MeshId"><url>http://www.roblox.com/asset/?id=1045320</url></Content>
						<token name="MeshType">5</token>
						<string name="Name">Mesh</string>
						<Vector3 name="Scale">
							<X>3</X>
							<Y>3</Y>
							<Z>3</Z>
						</Vector3>
						<Content name="TextureId"><url>http://www.roblox.com/asset/?id=1055256</url></Content>
						<Vector3 name="VertexColor">
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
						</Vector3>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Part" referent="RBX28">
				<Properties>
					<bool name="Anchored">false</bool>
					<float name="BackParamA">-0.5</float>
					<float name="BackParamB">0.5</float>
					<token name="BackSurface">0</token>
					<token name="BackSurfaceInput">0</token>
					<float name="BottomParamA">-0.5</float>
					<float name="BottomParamB">0.5</float>
					<token name="BottomSurface">0</token>
					<token name="BottomSurfaceInput">0</token>
					<int name="BrickColor">226</int>
					<CoordinateFrame name="CFrame">
						<X>-6</X>
						<Y>9.90039063</Y>
						<Z>65.9999847</Z>
						<R00>0</R00>
						<R01>-1.245829e-027</R01>
						<R02>1</R02>
						<R10>2.9963931e-028</R10>
						<R11>1</R11>
						<R12>-1.245829e-027</R12>
						<R20>-1</R20>
						<R21>-2.9963931e-028</R21>
						<R22>0</R22>
					</CoordinateFrame>
					<bool name="CanCollide">true</bool>
					<bool name="CastsShadows">true</bool>
					<token name="Controller">0</token>
					<bool name="ControllerFlagShown">true</bool>
					<bool name="Cullable">true</bool>
					<bool name="DraggingV1">false</bool>
					<float name="Elasticity">0.5</float>
					<token name="FormFactor">2</token>
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
					<string name="Name">Front</string>
					<float name="Reflectance">0</float>
					<float name="RightParamA">-0.5</float>
					<float name="RightParamB">0.5</float>
					<token name="RightSurface">0</token>
					<token name="RightSurfaceInput">0</token>
					<Vector3 name="RotVelocity">
						<X>6.08332275e-020</X>
						<Y>4.26090527</Y>
						<Z>1.26058997e-020</Z>
					</Vector3>
					<float name="TopParamA">-0.5</float>
					<float name="TopParamB">0.5</float>
					<token name="TopSurface">0</token>
					<token name="TopSurfaceInput">0</token>
					<float name="Transparency">0</float>
					<Vector3 name="Velocity">
						<X>-1.76309323</X>
						<Y>-0.631815135</Y>
						<Z>18.9484844</Z>
					</Vector3>
					<bool name="archivable">true</bool>
					<token name="shape">1</token>
					<Vector3 name="size">
						<X>2</X>
						<Y>1.60000002</Y>
						<Z>2</Z>
					</Vector3>
				</Properties>
				<Item class="SpecialMesh" referent="RBX29">
					<Properties>
						<Content name="MeshId"><url>http://www.roblox.com/asset/?id=1045320</url></Content>
						<token name="MeshType">5</token>
						<string name="Name">Mesh</string>
						<Vector3 name="Scale">
							<X>3</X>
							<Y>3</Y>
							<Z>3</Z>
						</Vector3>
						<Content name="TextureId"><url>http://www.roblox.com/asset/?id=1055256</url></Content>
						<Vector3 name="VertexColor">
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
						</Vector3>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="RocketPropulsion" referent="RBX30">
					<Properties>
						<float name="CartoonFactor">1</float>
						<float name="MaxSpeed">35</float>
						<float name="MaxThrust">400000</float>
						<Vector3 name="MaxTorque">
							<X>400000</X>
							<Y>400000</Y>
							<Z>0</Z>
						</Vector3>
						<string name="Name">Propulsion</string>
						<Ref name="Target">null</Ref>
						<Vector3 name="TargetOffset">
							<X>1000</X>
							<Y>10000</Y>
							<Z>0</Z>
						</Vector3>
						<float name="TargetRadius">10</float>
						<float name="ThrustD">1.25</float>
						<float name="ThrustP">5</float>
						<float name="TurnD">500</float>
						<float name="TurnP">3000</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Weld" referent="RBX31">
					<Properties>
						<CoordinateFrame name="C0">
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
						<CoordinateFrame name="C1">
							<X>2</X>
							<Y>0.399999976</Y>
							<Z>-6</Z>
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
						<string name="Name">Instance</string>
						<Ref name="Part0">RBX28</Ref>
						<Ref name="Part1">RBX10</Ref>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Weld" referent="RBX32">
					<Properties>
						<CoordinateFrame name="C0">
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
						<CoordinateFrame name="C1">
							<X>2</X>
							<Y>0.399999976</Y>
							<Z>-4</Z>
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
						<string name="Name">Instance</string>
						<Ref name="Part0">RBX28</Ref>
						<Ref name="Part1">RBX12</Ref>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Weld" referent="RBX33">
					<Properties>
						<CoordinateFrame name="C0">
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
						<CoordinateFrame name="C1">
							<X>0</X>
							<Y>0.399999976</Y>
							<Z>-6</Z>
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
						<string name="Name">Instance</string>
						<Ref name="Part0">RBX28</Ref>
						<Ref name="Part1">RBX14</Ref>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Weld" referent="RBX34">
					<Properties>
						<CoordinateFrame name="C0">
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
						<CoordinateFrame name="C1">
							<X>0</X>
							<Y>0.600000024</Y>
							<Z>-4</Z>
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
						<string name="Name">Instance</string>
						<Ref name="Part0">RBX28</Ref>
						<Ref name="Part1">RBX16</Ref>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Weld" referent="RBX35">
					<Properties>
						<CoordinateFrame name="C0">
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
						<CoordinateFrame name="C1">
							<X>-2</X>
							<Y>0.399999976</Y>
							<Z>-6</Z>
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
						<string name="Name">Instance</string>
						<Ref name="Part0">RBX28</Ref>
						<Ref name="Part1">RBX18</Ref>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Weld" referent="RBX36">
					<Properties>
						<CoordinateFrame name="C0">
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
						<CoordinateFrame name="C1">
							<X>-2</X>
							<Y>0.399999976</Y>
							<Z>-4</Z>
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
						<string name="Name">Instance</string>
						<Ref name="Part0">RBX28</Ref>
						<Ref name="Part1">RBX20</Ref>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Weld" referent="RBX37">
					<Properties>
						<CoordinateFrame name="C0">
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
						<CoordinateFrame name="C1">
							<X>0</X>
							<Y>0</Y>
							<Z>-2</Z>
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
						<string name="Name">Instance</string>
						<Ref name="Part0">RBX28</Ref>
						<Ref name="Part1">RBX22</Ref>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Weld" referent="RBX38">
					<Properties>
						<CoordinateFrame name="C0">
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
						<CoordinateFrame name="C1">
							<X>2</X>
							<Y>0.399999976</Y>
							<Z>-2</Z>
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
						<string name="Name">Instance</string>
						<Ref name="Part0">RBX28</Ref>
						<Ref name="Part1">RBX24</Ref>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Weld" referent="RBX39">
					<Properties>
						<CoordinateFrame name="C0">
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
						<CoordinateFrame name="C1">
							<X>-2</X>
							<Y>0.399999976</Y>
							<Z>-2</Z>
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
						<string name="Name">Instance</string>
						<Ref name="Part0">RBX28</Ref>
						<Ref name="Part1">RBX26</Ref>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Weld" referent="RBX40">
					<Properties>
						<CoordinateFrame name="C0">
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
						<CoordinateFrame name="C1">
							<X>0</X>
							<Y>0.200000048</Y>
							<Z>-4</Z>
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
						<string name="Name">Instance</string>
						<Ref name="Part0">RBX28</Ref>
						<Ref name="Part1">RBX41</Ref>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Script" referent="RBX42">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Power</string>
					<string name="Source">children = script.Parent:children()&#13;&#10;front = script.Parent.Front&#13;&#10;&#13;&#10;function stick(a,b) &#13;&#10;&#9;welded = true&#13;&#10;&#9;-- joint myself to the thing i hit &#13;&#10;&#9;local weld = Instance.new(&quot;Weld&quot;) &#13;&#10;&#13;&#10;&#9;weld.Part0 = a&#13;&#10;&#9;weld.Part1 = b &#13;&#10;&#13;&#10;&#9;local HitPos = a.Position&#13;&#10;&#13;&#10;&#9;local CJ = CFrame.new(HitPos) &#13;&#10;&#9;local C0 = a.CFrame:inverse() *CJ &#13;&#10;&#9;local C1 = b.CFrame:inverse() * CJ &#13;&#10;&#13;&#10;&#9;weld.C0 = C0 &#13;&#10;&#9;weld.C1 = C1 &#13;&#10;&#13;&#10;&#9;weld.Parent = a&#13;&#10;end&#13;&#10;&#13;&#10;for i=1,#children do&#13;&#10;&#9;if(children[i].className == &quot;Part&quot; and children[i].Name ~= &quot;Front&quot;) then stick(front,children[i]) end&#13;&#10;end&#13;&#10;wait(.5)&#13;&#10;front.Propulsion:Fire()&#13;&#10;dest = Vector3.new(1000,10000,0)&#13;&#10;script.Parent:move(dest)&#13;&#10;front.Propulsion.TargetOffset = dest</string>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Seat" referent="RBX41">
				<Properties>
					<bool name="Anchored">false</bool>
					<float name="BackParamA">-0.5</float>
					<float name="BackParamB">0.5</float>
					<token name="BackSurface">0</token>
					<token name="BackSurfaceInput">0</token>
					<float name="BottomParamA">-0.5</float>
					<float name="BottomParamB">0.5</float>
					<token name="BottomSurface">4</token>
					<token name="BottomSurfaceInput">0</token>
					<int name="BrickColor">194</int>
					<CoordinateFrame name="CFrame">
						<X>-2</X>
						<Y>9.70039082</Y>
						<Z>65.9999847</Z>
						<R00>0</R00>
						<R01>-1.245829e-027</R01>
						<R02>1</R02>
						<R10>2.9963931e-028</R10>
						<R11>1</R11>
						<R12>-1.245829e-027</R12>
						<R20>-1</R20>
						<R21>-2.9963931e-028</R21>
						<R22>0</R22>
					</CoordinateFrame>
					<bool name="CanCollide">true</bool>
					<bool name="CastsShadows">true</bool>
					<token name="Controller">0</token>
					<bool name="ControllerFlagShown">true</bool>
					<bool name="Cullable">true</bool>
					<bool name="DraggingV1">false</bool>
					<float name="Elasticity">0.5</float>
					<token name="FormFactor">2</token>
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
					<string name="Name">Seat</string>
					<float name="Reflectance">0</float>
					<float name="RightParamA">-0.5</float>
					<float name="RightParamB">0.5</float>
					<token name="RightSurface">0</token>
					<token name="RightSurfaceInput">0</token>
					<Vector3 name="RotVelocity">
						<X>6.08332275e-020</X>
						<Y>4.26090527</Y>
						<Z>1.26058997e-020</Z>
					</Vector3>
					<float name="TopParamA">-0.5</float>
					<float name="TopParamB">0.5</float>
					<token name="TopSurface">3</token>
					<token name="TopSurfaceInput">0</token>
					<float name="Transparency">1</float>
					<Vector3 name="Velocity">
						<X>-1.76309323</X>
						<Y>-0.631815135</Y>
						<Z>1.90486336</Z>
					</Vector3>
					<bool name="archivable">true</bool>
					<token name="shape">1</token>
					<Vector3 name="size">
						<X>2</X>
						<Y>0.400000006</Y>
						<Z>2</Z>
					</Vector3>
				</Properties>
				<Item class="BodyGyro" referent="RBX43">
					<Properties>
						<float name="D">500</float>
						<string name="Name">BodyGyro</string>
						<float name="P">3000</float>
						<bool name="archivable">true</bool>
						<CoordinateFrame name="cframe">
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
						<Vector3 name="maxTorque">
							<X>4000</X>
							<Y>0</Y>
							<Z>4000</Z>
						</Vector3>
					</Properties>
				</Item>
			</Item>
		</Item>
		<Item class="HopperBin" referent="RBX44">
			<Properties>
				<token name="BinType">0</token>
				<string name="Name">Fly2</string>
				<Content name="TextureId"><null></null></Content>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Script" referent="RBX45">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">TeleportScript</string>
					<string name="Source">&#13;&#10;wait(.5)&#13;&#10;bin = script.Parent&#13;&#10;vehicle = game.Workspace.clockwork.TeapotTurret.TVehicle&#13;&#10;&#13;&#10;function assignPosition(pos)&#13;&#10;&#13;&#10;&#9;local player = game.Players.LocalPlayer&#13;&#10;&#9;if player == nil or player.Character == nil then return end&#13;&#10;&#9;local char = vehicle.Front&#13;&#10;&#9;obj = char.Propulsion&#13;&#10;&#9;difference = pos - char.Position&#13;&#10;&#9;obj.TargetOffset = pos + Vector3.new(0,4,0)&#13;&#10;end&#13;&#10;&#13;&#10;function onButton1Down(mouse)&#13;&#10;&#13;&#10;&#9;local player = game.Players.LocalPlayer&#13;&#10;&#9;if player == nil then return end&#13;&#10;&#9;print(&quot;trigger&quot;)&#13;&#10;&#9;-- find the best cf&#13;&#10;&#9;assignPosition(mouse.Hit.p) &#13;&#10;end&#13;&#10;&#13;&#10;function onSelected(mouse)&#13;&#10;&#9;print(&quot;select&quot;)&#13;&#10;&#9;mouse.Icon = &quot;rbxasset://textures\\ArrowCursor.png&quot;&#13;&#10;&#9;mouse.Button1Down:connect(function() onButton1Down(mouse) end)&#13;&#10;end&#13;&#10;&#13;&#10;bin.Selected:connect(onSelected)</string>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="IntValue" referent="RBX46">
				<Properties>
					<string name="Name">Power</string>
					<int name="Value">30</int>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="HopperBin" referent="RBX47">
			<Properties>
				<token name="BinType">0</token>
				<string name="Name">The One Tool</string>
				<Content name="TextureId"><null></null></Content>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Script" referent="RBX48">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Script</string>
					<string name="Source">--clockwork&#13;&#10;&#13;&#10;local bin = script.Parent&#13;&#10;mode = 0&#13;&#10;&#13;&#10;weapons = {}&#13;&#10;children = bin:children()&#13;&#10;for i=1,#children do&#13;&#10;&#9;if(children[i].className == &quot;HopperBin&quot;) then&#13;&#10;&#9;&#9;table.insert(weapons,children[i]) &#13;&#10;&#9;end&#13;&#10;end&#13;&#10;&#13;&#10;&#13;&#10;table.sort(weapons, &#13;&#10;function (obj1, obj2)&#13;&#10;&#9;if(obj1.Name &lt; obj2.Name) then return true end&#13;&#10;&#9;return false&#13;&#10;end&#13;&#10;)&#13;&#10;&#13;&#10;curTool = weapons[1].Name&#13;&#10;&#13;&#10;function onButton1Down(mouse)&#13;&#10;&#9;local player = game.Players.LocalPlayer&#13;&#10;&#9;if player == nil then return end&#13;&#10;&#9;print(&quot;trigger&quot;)&#13;&#10;&#9;if(player.Backpack:findFirstChild(curTool) ~= nil) then player.Backpack[curTool]:remove() end&#13;&#10;&#9;mode = mode + 1&#13;&#10;&#9;if(mode &gt; #weapons) then mode = 1 end&#13;&#10;&#9;if(mode &lt; 1) then mode = #weapons end&#13;&#10;&#9;weapons[mode]:clone().Parent = player.Backpack&#13;&#10;&#9;curTool = weapons[mode].Name&#13;&#10;end&#13;&#10;&#13;&#10;function keyDown(key)&#13;&#10;&#9;if(key == &quot;q&quot;) then&#13;&#10;&#9;&#9;mode = mode - 1&#13;&#10;&#9;&#9;if(mode &gt; #weapons) then mode = 1 end&#13;&#10;&#9;&#9;if(mode &lt; 1) then mode = #weapons end&#13;&#10;&#9;end&#13;&#10;end&#13;&#10;&#13;&#10;function onSelected(mouse)&#13;&#10;&#9;print(&quot;select&quot;)&#13;&#10;&#9;mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;&#13;&#10;&#9;mouse.Button1Down:connect(function() onButton1Down(mouse) end)&#13;&#10;&#9;mouse.KeyDown:connect(keyDown)&#13;&#10;end&#13;&#10;&#13;&#10;bin.Selected:connect(onSelected)</string>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="HopperBin" referent="RBX49">
				<Properties>
					<token name="BinType">0</token>
					<string name="Name">Avada Kedavra</string>
					<Content name="TextureId"><null></null></Content>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Script" referent="RBX50">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Script</string>
						<string name="Source">--clockwork&#13;&#10;&#13;&#10;local bin = script.Parent&#13;&#10;local msg = Instance.new(&quot;Hint&quot;)&#13;&#10;msg.Text = &quot;Avada Kedavra!&quot;&#13;&#10;enabled = true&#13;&#10;&#13;&#10;function stick(x, y)&#13;&#10;&#9;weld = Instance.new(&quot;Weld&quot;) &#13;&#10;&#13;&#10;&#9;weld.Part0 = x&#13;&#10;&#9;weld.Part1 = y&#13;&#10;&#13;&#10;&#9;local HitPos = x.Position&#13;&#10;&#13;&#10;&#9;local CJ = CFrame.new(HitPos) &#13;&#10;&#9;local C0 = x.CFrame:inverse() *CJ &#13;&#10;&#9;local C1 = y.CFrame:inverse() * CJ &#13;&#10;&#13;&#10;&#9;weld.C0 = C0 &#13;&#10;&#9;weld.C1 = C1 &#13;&#10;&#9;&#13;&#10;&#9;weld.Parent = x&#13;&#10;end&#13;&#10;&#13;&#10;function onButton1Down(mouse)&#13;&#10;&#9;local player = game.Players.LocalPlayer&#13;&#10;&#9;if player == nil then return end&#13;&#10;&#9;print(&quot;trigger&quot;)&#13;&#10;&#9;-- find the best cf&#13;&#10;&#13;&#10;&#9;target = mouse.Target&#13;&#10;&#9;if target == nil then return end&#13;&#10;&#9;humanoid = target.Parent:findFirstChild(&quot;Humanoid&quot;)&#13;&#10;&#9;if humanoid == nil then return end&#13;&#10;&#9;msg.Parent = game.Workspace&#13;&#10;&#9;top = game.Lighting.TopAmbientV9&#13;&#10;&#9;spot = game.Lighting.SpotLightV9 &#13;&#10;&#9;game.Lighting.TopAmbientV9 = Color3.new(0,125,0)&#13;&#10;&#9;game.Lighting.SpotLightV9 = Color3.new(0,125,0)&#13;&#10;&#9;humanoid.Health = 0&#13;&#10;&#9;children = target.Parent:children()&#13;&#10;&#9;for i=1,#children do&#13;&#10;&#9;&#9;if(children[i].className == &quot;Part&quot; and children[i].Name ~= &quot;Torso&quot;) then stick(children[i], target.Parent.Torso) end&#13;&#10;&#9;&#9;if(children[i].className == &quot;Hat&quot;) then stick(children[i].Handle, target.Parent.Torso) end&#13;&#10;&#9;end&#13;&#10;&#9;target.Parent.Head.Velocity = target.Parent.Head.Velocity + Vector3.new(5,0,0)&#13;&#10;&#9;wait(.1)&#13;&#10;&#9;game.Lighting.TopAmbientV9 = top&#13;&#10;&#9;game.Lighting.SpotLightV9 = spot&#13;&#10;&#9;wait(2)&#13;&#10;&#9;msg.Parent = nil&#13;&#10;end&#13;&#10;&#13;&#10;function onSelected(mouse)&#13;&#10;&#9;print(&quot;select&quot;)&#13;&#10;&#9;mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;&#13;&#10;&#9;mouse.Button1Down:connect(function() onButton1Down(mouse) end)&#13;&#10;end&#13;&#10;&#13;&#10;bin.Selected:connect(onSelected)&#13;&#10;</string>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="HopperBin" referent="RBX51">
				<Properties>
					<token name="BinType">0</token>
					<string name="Name">Delimber</string>
					<Content name="TextureId"><null></null></Content>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Script" referent="RBX52">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Script</string>
						<string name="Source">-- clockwork&#13;&#10;bin=script.Parent&#13;&#10;sound = bin.Sound&#13;&#10;&#13;&#10;limbs = {&quot;Left Leg&quot;, &quot;Right Leg&quot;, &quot;Left Arm&quot;, &quot;Right Arm&quot;}&#13;&#10;&#13;&#10;function onButton1Down(mouse)&#13;&#10;&#13;&#10;&#9;mouse.Icon = &quot;rbxasset://textures\\GunWaitCursor.png&quot;&#13;&#10;&#9;local hit = mouse.Target&#13;&#10;&#9;if (hit == nil) then return end&#13;&#10;&#9;humanoid = hit.Parent:findFirstChild(&quot;Humanoid&quot;)&#13;&#10;&#9;if(humanoid == nil) then return end&#13;&#10;&#13;&#10;&#9;sound:play()&#13;&#10;&#9;limb = math.random(1,4)&#13;&#10;&#9;char = humanoid.Parent&#13;&#10;&#9;targetLimb = limbs[limb]&#13;&#10;&#13;&#10;&#9;if(char:findFirstChild(targetLimb) ~= nil) then char[targetLimb]:remove() end&#13;&#10;&#13;&#10;&#9;mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;&#13;&#10;end&#13;&#10;&#13;&#10;&#13;&#10;function onSelected(mouse)&#13;&#10;&#9;print(&quot;Action Tool Selected&quot;)&#13;&#10;&#9;mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;&#13;&#10;&#9;mouse.Button1Down:connect(function() onButton1Down(mouse) end)&#13;&#10;end&#13;&#10;&#13;&#10;bin.Selected:connect(onSelected)</string>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX53">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">Sound</string>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.roblox.com/asset/?id=1079839</url></Content>
						<float name="Volume">0.300000012</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="HopperBin" referent="RBX54">
				<Properties>
					<token name="BinType">0</token>
					<string name="Name">Hat Jacker</string>
					<Content name="TextureId"><null></null></Content>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Script" referent="RBX55">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">ActionTool</string>
						<string name="Source">-- clockwork&#13;&#10;bin=script.Parent&#13;&#10;sfx = bin.Sound&#13;&#10;&#13;&#10;function onButton1Down(mouse)&#13;&#10;&#9;mouse.Icon = &quot;rbxasset://textures\\GunWaitCursor.png&quot;&#13;&#10;&#9;local hit = mouse.Target&#13;&#10;&#9;if (hit == nil) then return end&#13;&#10;&#9;humanoid = hit.Parent:findFirstChild(&quot;Humanoid&quot;)&#13;&#10;&#9;if(humanoid == nil) then return end&#13;&#10;&#9;sfx:play()&#13;&#10;&#9;children = hit.Parent:children()&#13;&#10;&#9;for i=1,#children do&#13;&#10;&#9;&#9;if(children[i].className == &quot;Hat&quot;) then children[i].Parent = bin.Parent.Parent.Character return end&#13;&#10;&#9;end&#13;&#10;&#9;mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;&#13;&#10;end&#13;&#10;&#13;&#10;&#13;&#10;function onSelected(mouse)&#13;&#10;&#9;print(&quot;Action Tool Selected&quot;)&#13;&#10;&#9;mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;&#13;&#10;&#9;mouse.Button1Down:connect(function() onButton1Down(mouse) end)&#13;&#10;end&#13;&#10;&#13;&#10;bin.Selected:connect(onSelected)</string>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX56">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">Sound</string>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.roblox.com/asset/?id=1079839</url></Content>
						<float name="Volume">0.300000012</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="HopperBin" referent="RBX57">
				<Properties>
					<token name="BinType">0</token>
					<string name="Name">Katon Goukakyou No Jutsu</string>
					<Content name="TextureId"><null></null></Content>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Script" referent="RBX58">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Script</string>
						<string name="Source">--clockwork&#13;&#10;&#13;&#10;local bin = script.Parent&#13;&#10;local sfx = bin.Sound&#13;&#10;enabled = true&#13;&#10;&#13;&#10;function explode(pos)&#13;&#10;&#9;local lol = Instance.new(&quot;Explosion&quot;)&#13;&#10;&#9;lol.BlastRadius = 10&#13;&#10;&#9;lol.BlastPressure = 1000000&#13;&#10;&#9;lol.Position = pos&#13;&#10;&#9;lol.Parent = game.Workspace&#13;&#10;end&#13;&#10;&#13;&#10;function onButton1Down(mouse)&#13;&#10;&#9;local player = game.Players.LocalPlayer&#13;&#10;&#9;if player == nil then return end&#13;&#10;&#9;print(&quot;trigger&quot;)&#13;&#10;&#9;-- find the best cf&#13;&#10;&#13;&#10;&#9;startPos = player.Character.Head.Position&#13;&#10;&#9;delta = mouse.Hit.p - startPos&#13;&#10;&#9;unit = delta.unit&#13;&#10;&#9;sfx:play()&#13;&#10;&#9;for i=0,75 do&#13;&#10;&#9;&#9;explode(startPos + unit * 20 + i * unit * i / 25)&#13;&#10;&#9;&#9;wait(.05)&#13;&#10;&#9;end&#13;&#10;end&#13;&#10;&#13;&#10;function onSelected(mouse)&#13;&#10;&#9;print(&quot;select&quot;)&#13;&#10;&#9;mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;&#13;&#10;&#9;mouse.Button1Down:connect(function() onButton1Down(mouse) end)&#13;&#10;end&#13;&#10;&#13;&#10;bin.Selected:connect(onSelected)&#13;&#10;</string>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX59">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">Sound</string>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.roblox.com/asset/?id=1079802</url></Content>
						<float name="Volume">0.200000003</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="HopperBin" referent="RBX60">
				<Properties>
					<token name="BinType">0</token>
					<string name="Name">Ray Gun Of Collapse</string>
					<Content name="TextureId"><null></null></Content>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Sound" referent="RBX61">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">Sound</string>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.roblox.com/asset/?id=1079839</url></Content>
						<float name="Volume">0.300000012</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Script" referent="RBX62">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Script</string>
						<string name="Source">--clockwork&#13;&#10;&#13;&#10;local bin = script.Parent&#13;&#10;local sfx = bin.Sound&#13;&#10;&#13;&#10;function onButton1Down(mouse)&#13;&#10;&#9;local player = game.Players.LocalPlayer&#13;&#10;&#9;if player == nil then return end&#13;&#10;&#9;print(&quot;trigger&quot;)&#13;&#10;&#9;-- find the best cf&#13;&#10;&#13;&#10;&#9;target = mouse.Target&#13;&#10;&#9;if target == nil then return end&#13;&#10;&#9;model = target.Parent&#13;&#10;&#9;if(model:findFirstChild(&quot;Humanoid&quot;) ~= nil) then return end&#13;&#10;&#9;sfx:play()&#13;&#10;&#9;model:breakJoints()&#13;&#10;end&#13;&#10;&#13;&#10;function onSelected(mouse)&#13;&#10;&#9;print(&quot;select&quot;)&#13;&#10;&#9;mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;&#13;&#10;&#9;mouse.Button1Down:connect(function() onButton1Down(mouse) end)&#13;&#10;end&#13;&#10;&#13;&#10;bin.Selected:connect(onSelected)&#13;&#10;</string>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="HopperBin" referent="RBX63">
				<Properties>
					<token name="BinType">0</token>
					<string name="Name">Ray Gun Of Irresistable Dancing</string>
					<Content name="TextureId"><null></null></Content>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Script" referent="RBX64">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Script</string>
						<string name="Source">--clockwork&#13;&#10;&#13;&#10;local bin = script.Parent&#13;&#10;local sfx = bin.Sound&#13;&#10;&#13;&#10;function onButton1Down(mouse)&#13;&#10;&#9;local player = game.Players.LocalPlayer&#13;&#10;&#9;if player == nil then return end&#13;&#10;&#9;print(&quot;trigger&quot;)&#13;&#10;&#9;-- find the best cf&#13;&#10;&#13;&#10;&#9;target = mouse.Target&#13;&#10;&#9;if target == nil then return end&#13;&#10;&#9;humanoid = target.Parent:findFirstChild(&quot;Humanoid&quot;)&#13;&#10;&#9;if humanoid == nil then return end&#13;&#10;&#9;sfx:play()&#13;&#10;&#9;Torso = humanoid.Parent.Torso&#13;&#10;&#9;RightShoulder = Torso[&quot;Right Shoulder&quot;]&#13;&#10;&#9;LeftShoulder = Torso[&quot;Left Shoulder&quot;]&#13;&#10;&#9;RightHip = Torso[&quot;Right Hip&quot;]&#13;&#10;&#9;LeftHip = Torso[&quot;Left Hip&quot;]&#13;&#10;&#9;for i=1,20 do&#13;&#10;&#9;&#9;wait(.5)&#13;&#10;&#9;&#9;RightShoulder.MaxVelocity = 1&#13;&#10;&#9;&#9;LeftShoulder.MaxVelocity = 1&#13;&#10;&#9;&#9;RightShoulder.DesiredAngle = -3.14&#13;&#10;&#9;&#9;LeftShoulder.DesiredAngle = 0&#13;&#10;&#9;&#9;RightHip.DesiredAngle = 1.57&#13;&#10;&#9;&#9;LeftHip.DesiredAngle = 0&#13;&#10;&#9;&#9;wait(.5)&#13;&#10;&#9;&#9;RightShoulder.MaxVelocity = 1&#13;&#10;&#9;&#9;LeftShoulder.MaxVelocity = 1&#13;&#10;&#9;&#9;RightShoulder.DesiredAngle = 0&#13;&#10;&#9;&#9;LeftShoulder.DesiredAngle = -3.14&#13;&#10;&#9;&#9;RightHip.DesiredAngle = 0&#13;&#10;&#9;&#9;LeftHip.DesiredAngle = 1.57&#13;&#10;&#9;end&#13;&#10;end&#13;&#10;&#13;&#10;function onSelected(mouse)&#13;&#10;&#9;print(&quot;select&quot;)&#13;&#10;&#9;mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;&#13;&#10;&#9;mouse.Button1Down:connect(function() onButton1Down(mouse) end)&#13;&#10;end&#13;&#10;&#13;&#10;bin.Selected:connect(onSelected)&#13;&#10;</string>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX65">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">Sound</string>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.roblox.com/asset/?id=1079801</url></Content>
						<float name="Volume">0.600000024</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="HopperBin" referent="RBX66">
				<Properties>
					<token name="BinType">0</token>
					<string name="Name">SpinFire</string>
					<Content name="TextureId"><null></null></Content>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Script" referent="RBX67">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Script</string>
						<string name="Source">--clockwork&#13;&#10;&#13;&#10;local bin = script.Parent&#13;&#10;sfx = bin.Sound&#13;&#10;&#13;&#10;function explode(pos)&#13;&#10;&#9;local lol = Instance.new(&quot;Explosion&quot;)&#13;&#10;&#9;lol.BlastRadius = 2&#13;&#10;&#9;lol.BlastPressure = 1000000&#13;&#10;&#9;lol.Position = pos&#13;&#10;&#9;lol.Parent = game.Workspace&#13;&#10;end&#13;&#10;&#13;&#10;function onButton1Down(mouse)&#13;&#10;&#9;local player = game.Players.LocalPlayer&#13;&#10;&#9;if player == nil then return end&#13;&#10;&#9;print(&quot;trigger&quot;)&#13;&#10;&#9;-- find the best cf&#13;&#10;&#13;&#10;&#9;sfx:play()&#13;&#10;&#9;look = CFrame.new(player.Character.Head.Position,mouse.Hit.p)&#13;&#10;&#9;for i=0,75 do&#13;&#10;&#9;&#9;x = math.sin(i / 3) * 8 * (75 - i) / 75&#13;&#10;&#9;&#9;y = math.cos(i / 3) * 8 * (75 - i) / 75&#13;&#10;&#9;&#9;helix = look * CFrame.new(x,y,-i)&#13;&#10;&#9;&#9;&#13;&#10;&#9;&#9;explode(helix.p)&#13;&#10;&#13;&#10;&#9;&#9;x = -math.sin(i / 3) * 8 * (75 - i) / 75&#13;&#10;&#9;&#9;y = -math.cos(i / 3) * 8 * (75 - i) / 75&#13;&#10;&#9;&#9;helix = look * CFrame.new(x,y,-i)&#13;&#10;&#9;&#9;&#13;&#10;&#9;&#9;explode(helix.p)&#13;&#10;&#9;&#9;wait(.02)&#13;&#10;&#9;end&#13;&#10;&#9;sfx:pause()&#13;&#10;end&#13;&#10;&#13;&#10;function onSelected(mouse)&#13;&#10;&#9;print(&quot;select&quot;)&#13;&#10;&#9;mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;&#13;&#10;&#9;mouse.Button1Down:connect(function() onButton1Down(mouse) end)&#13;&#10;end&#13;&#10;&#13;&#10;bin.Selected:connect(onSelected)&#13;&#10;</string>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX68">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">Sound</string>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>rbxasset://sounds\Rocket whoosh 01.wav</url></Content>
						<float name="Volume">0.600000024</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="HopperBin" referent="RBX69">
				<Properties>
					<token name="BinType">0</token>
					<string name="Name">House Spawner</string>
					<Content name="TextureId"><null></null></Content>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Script" referent="RBX70">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Script</string>
						<string name="Source">-- clockwork&#13;&#10;bin=script.Parent&#13;&#10;&#13;&#10;limbs = {&quot;Left Leg&quot;, &quot;Right Leg&quot;, &quot;Left Arm&quot;, &quot;Right Arm&quot;}&#13;&#10;&#13;&#10;function stick(x, y)&#13;&#10;&#9;weld = Instance.new(&quot;Weld&quot;) &#13;&#10;&#13;&#10;&#9;weld.Part0 = x&#13;&#10;&#9;weld.Part1 = y&#13;&#10;&#13;&#10;&#9;local HitPos = x.Position&#13;&#10;&#13;&#10;&#9;local CJ = CFrame.new(HitPos) &#13;&#10;&#9;local C0 = x.CFrame:inverse() *CJ &#13;&#10;&#9;local C1 = y.CFrame:inverse() * CJ &#13;&#10;&#13;&#10;&#9;weld.C0 = C0 &#13;&#10;&#9;weld.C1 = C1 &#13;&#10;&#9;&#13;&#10;&#9;weld.Parent = x&#13;&#10;end&#13;&#10;&#13;&#10;function spawnHouse(offset)&#13;&#10;template = Instance.new(&quot;Part&quot;)&#13;&#10;template.Anchored = true&#13;&#10;&#13;&#10;house = Instance.new(&quot;Model&quot;)&#13;&#10;house.Name = &quot;House&quot;&#13;&#10;house.Parent = game.Workspace&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-23,4.8,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,4.8,22)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-11,19.2,24.5)&#13;&#10;part.Size = Vector3.new(2,2.4,1)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,19.2,20)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-5,16.8,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,16.8,22)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,16.8,16)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,14.4,20)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,9.6,20)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,12,20.5)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,7.2,20.5)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-18,14.4,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-24.5,14.4,24)&#13;&#10;part.Size = Vector3.new(7,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-4.5,14.4,24)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-18.5,12,24)&#13;&#10;part.Size = Vector3.new(7,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-25,12,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-24.5,9.6,24)&#13;&#10;part.Size = Vector3.new(7,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-18,9.6,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-25,7.2,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-18.5,7.2,24)&#13;&#10;part.Size = Vector3.new(7,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-11,16.8,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-17,16.8,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-23,16.8,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-1,19.2,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-7,19.2,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-14,19.2,24)&#13;&#10;part.Size = Vector3.new(4,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-19,19.2,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-25,19.2,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-11,4.8,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-17,4.8,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,4.8,16)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,4.8,10)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,4.8,4)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(11,19.2,24.5)&#13;&#10;part.Size = Vector3.new(2,2.4,1)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,19.2,14)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,19.2,8)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(7,16.8,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(1,16.8,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,16.8,4)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,16.8,10)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,12,15)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,14.4,14.5)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,9.6,14.5)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,7.2,15)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-5,12,24)&#13;&#10;part.Size = Vector3.new(4,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(0.5,14.4,24)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-0.5,12,24)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(5,14.4,24)&#13;&#10;part.Size = Vector3.new(4,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-4.5,9.6,24)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(6,19.2,24)&#13;&#10;part.Size = Vector3.new(8,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-5,4.8,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(4.5,12,24)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(8,15,24)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(0.5,9.6,24)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-5,7.2,24)&#13;&#10;part.Size = Vector3.new(4,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(13,19.2,24)&#13;&#10;part.Size = Vector3.new(2,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,19.2,2)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(13,16.8,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,14.4,2)&#13;&#10;part.Size = Vector3.new(4,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,12,1.5)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,9.6,2)&#13;&#10;part.Size = Vector3.new(4,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,7.2,1.5)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(7.5,13.2,24)&#13;&#10;part.Size = Vector3.new(1,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(8.5,13.2,24)&#13;&#10;part.Size = Vector3.new(1,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(11,15,24)&#13;&#10;part.Size = Vector3.new(4,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(5,9.6,24)&#13;&#10;part.Size = Vector3.new(4,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-0.5,7.2,24)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(17,19.2,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,4.8,-2)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(1,4.8,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(5.5,4.8,24)&#13;&#10;part.Size = Vector3.new(3,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-11,19.2,-3)&#13;&#10;part.Size = Vector3.new(2,2.4,54)&#13;&#10;part.BrickColor = BrickColor.new(192)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,19.2,-4)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(19,16.8,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,16.8,-2)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,14.4,-2.5)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,12,-3.5)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,9.6,-2.5)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,7.2,-3.5)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(0,2.4,-3)&#13;&#10;part.Size = Vector3.new(56,2.4,56)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(7.5,7.8,24)&#13;&#10;part.Size = Vector3.new(1,8.4,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(13.5,13.2,24)&#13;&#10;part.Size = Vector3.new(1,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(14.5,13.2,24)&#13;&#10;part.Size = Vector3.new(1,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(14,15,24)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(0,4.2,-3)&#13;&#10;part.Size = Vector3.new(52,1.2,52)&#13;&#10;part.BrickColor = BrickColor.new(102)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(17.5,14.4,24)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(4.5,7.2,24)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(11,19.2,-3)&#13;&#10;part.Size = Vector3.new(2,2.4,54)&#13;&#10;part.BrickColor = BrickColor.new(192)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(23,19.2,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,19.2,4)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,19.2,-2)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(15.5,4.8,24)&#13;&#10;part.Size = Vector3.new(1,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(19,4.8,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,4.8,-8)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,4.8,-20)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,4.8,-14)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,16.8,-16)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,16.8,-10)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,16.8,-4)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,16.8,2)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,16.8,8)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,16.8,14)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,14.4,-8)&#13;&#10;part.Size = Vector3.new(4,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,14.4,15)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,12,-7.5)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,14.4,21.5)&#13;&#10;part.Size = Vector3.new(7,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,14.4,1.5)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,14.4,-3.5)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,12,-2.5)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,12,15.5)&#13;&#10;part.Size = Vector3.new(7,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,12,2)&#13;&#10;part.Size = Vector3.new(4,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,12,22)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(11,2.4,27)&#13;&#10;part.Size = Vector3.new(6,2.4,4)&#13;&#10;part.BrickColor = BrickColor.new(199)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,19.2,-10)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,19.2,-16)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,19.2,-22)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,16.8,-20)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,16.8,-14)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,16.8,-8)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,16.8,20)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(25,16.8,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,14.4,-21)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,14.4,-7.5)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,12,-21.5)&#13;&#10;part.Size = Vector3.new(7,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,12,-8)&#13;&#10;part.Size = Vector3.new(4,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,9.6,-7.5)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,9.6,-21)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,7.2,-21.5)&#13;&#10;part.Size = Vector3.new(7,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,7.2,-8)&#13;&#10;part.Size = Vector3.new(4,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(11,4.2,25)&#13;&#10;part.Size = Vector3.new(6,1.2,4)&#13;&#10;part.BrickColor = BrickColor.new(199)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(14.5,7.8,24)&#13;&#10;part.Size = Vector3.new(1,8.4,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(18,12,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(17.5,9.6,24)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(23,14.4,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(23,9.6,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(23.5,12,24)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(18,7.2,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(11,1.2,30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(199)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(11,0.6,32)&#13;&#10;part.Size = Vector3.new(6,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(199)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,19.2,22)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,19.2,16)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,19.2,10)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,19.2,-8)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,19.2,-14)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,4.8,-26)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,16.8,-26)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,9.6,-27.5)&#13;&#10;part.Size = Vector3.new(7,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,9.6,-20.5)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,14.4,-27.5)&#13;&#10;part.Size = Vector3.new(7,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,12,-28)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,7.2,-28)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(23.5,7.2,24)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,14.4,-20.5)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,19.2,-20)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-25,4.8,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,9.6,21.5)&#13;&#10;part.Size = Vector3.new(7,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,9.6,1.5)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,9.6,15)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,9.6,-3.5)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,12,-21)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,9.6,-8)&#13;&#10;part.Size = Vector3.new(4,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,19.2,-28)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-19,4.8,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-13,4.8,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-7,4.8,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,16.8,-22)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-18,12,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-17.5,14.4,-30)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-17.5,9.6,-30)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-23,14.4,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-23,9.6,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-23.5,12,-30)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-23.5,7.2,-30)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-18,7.2,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-13,16.8,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-19,16.8,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-25,16.8,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-17,19.2,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-23,19.2,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,7.2,-2.5)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(25,4.8,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-1,4.8,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(5,4.8,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(17,4.8,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(11,4.8,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,7.2,22)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,7.2,15.5)&#13;&#10;part.Size = Vector3.new(7,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,12,-26.5)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,14.4,-26)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-11,19.2,-30.5)&#13;&#10;part.Size = Vector3.new(2,2.4,1)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,9.6,-26)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,7.2,2)&#13;&#10;part.Size = Vector3.new(4,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,7.2,-7.5)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,7.2,-26.5)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,7.2,-21)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(4.5,14.4,-30)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(5,12,-30)&#13;&#10;part.Size = Vector3.new(4,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-0.5,14.4,-30)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(0.5,12,-30)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-5,14.4,-30)&#13;&#10;part.Size = Vector3.new(4,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-4.5,12,-30)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(4.5,9.6,-30)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-0.5,9.6,-30)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-5,9.6,-30)&#13;&#10;part.Size = Vector3.new(4,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(0.5,7.2,-30)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(18.5,7.2,-30)&#13;&#10;part.Size = Vector3.new(7,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(5,7.2,-30)&#13;&#10;part.Size = Vector3.new(4,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-4.5,7.2,-30)&#13;&#10;part.Size = Vector3.new(5,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(5,16.8,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-1,16.8,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-7,16.8,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(11,16.8,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-13,19.2,-30)&#13;&#10;part.Size = Vector3.new(2,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-6,19.2,-30)&#13;&#10;part.Size = Vector3.new(8,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(1,19.2,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(7,19.2,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,19.2,-26)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,4.8,-22)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,4.8,-16)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,4.8,-10)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,4.8,-4)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,4.8,2)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,4.8,14)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,4.8,20)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,4.8,8)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,4.8,-28)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(23,4.8,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,16.8,-28)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(18,14.4,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(24.5,14.4,-30)&#13;&#10;part.Size = Vector3.new(7,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(18.5,12,-30)&#13;&#10;part.Size = Vector3.new(7,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(25,12,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(24.5,9.6,-30)&#13;&#10;part.Size = Vector3.new(7,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(18,9.6,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(25,7.2,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(23,16.8,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(17,16.8,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(17,19.2,-30)&#13;&#10;part.Size = Vector3.new(10,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(11,19.2,-30.5)&#13;&#10;part.Size = Vector3.new(2,2.4,1)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(25,19.2,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(7,28.8,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(5,26.4,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(11,28.2,24)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(3,31.2,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(13,29.4,24)&#13;&#10;part.Size = Vector3.new(6,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(3,35.4,21)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(7,30.6,24)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(7,33,21)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(9,31.8,24)&#13;&#10;part.Size = Vector3.new(6,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(5,34.2,15)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(5,34.2,24)&#13;&#10;part.Size = Vector3.new(6,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(11,30.6,21)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(3,33,24)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(1,28.8,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-11,28.2,24)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-13,29.4,24)&#13;&#10;part.Size = Vector3.new(6,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-15,24,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-15,25.8,24)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(0,33.6,24)&#13;&#10;part.Size = Vector3.new(4,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(9,24,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-5,34.2,3)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(7,33,9)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-9,31.8,24)&#13;&#10;part.Size = Vector3.new(6,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-11,30.6,9)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-7,33,21)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-11,30.6,21)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-9,31.8,15)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-7,30.6,24)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-7,33,9)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-9,31.8,3)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-3,35.4,21)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(5,21.6,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(15,24,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(11,26.4,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-6,28.8,24)&#13;&#10;part.Size = Vector3.new(8,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(23,23.4,21)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-13,21.6,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-7,21.6,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-1,21.6,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-12,26.4,24)&#13;&#10;part.Size = Vector3.new(4,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-1,26.4,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-3,24,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(3,24,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-9,24,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-7,26.4,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(11,21.6,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(18,21.6,24)&#13;&#10;part.Size = Vector3.new(8,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(3,35.4,9)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(25,22.2,24)&#13;&#10;part.Size = Vector3.new(6,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(0,37.8,21)&#13;&#10;part.Size = Vector3.new(12,1.2,4)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(23,21,24)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-3,35.4,9)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(9,31.8,15)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(19,25.8,21)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(15,28.2,21)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-5,34.2,15)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(0,37.8,9)&#13;&#10;part.Size = Vector3.new(12,1.2,4)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(15,25.8,24)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(11,30.6,9)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(0,37.8,-3)&#13;&#10;part.Size = Vector3.new(12,1.2,4)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-5,34.2,24)&#13;&#10;part.Size = Vector3.new(6,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-3,33,24)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(17,27,15)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(0,36.6,15)&#13;&#10;part.Size = Vector3.new(12,1.2,8)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(0,36.6,3)&#13;&#10;part.Size = Vector3.new(12,1.2,8)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(21,24.6,24)&#13;&#10;part.Size = Vector3.new(6,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(0,36.6,24)&#13;&#10;part.Size = Vector3.new(6,1.2,8)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(13,29.4,15)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(19,23.4,24)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(5,34.2,3)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,21,21)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(17,27,24)&#13;&#10;part.Size = Vector3.new(6,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-3,31.2,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(21,24.6,15)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(15,28.2,9)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-13,29.4,15)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-7,33,-3)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-5,34.2,-9)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-3,35.4,-3)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(23,23.4,9)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(25,22.2,15)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(0,36.6,-9)&#13;&#10;part.Size = Vector3.new(12,1.2,8)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(19,25.8,9)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(17,27,3)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(7,33,-3)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(3,35.4,-3)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(11,30.6,-3)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(9,31.8,3)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,21,9)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(13,29.4,3)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-15,28.2,-3)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-21,24.6,24)&#13;&#10;part.Size = Vector3.new(6,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-13,29.4,-9)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-17,27,24)&#13;&#10;part.Size = Vector3.new(6,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-13,29.4,3)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-15,28.2,21)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-19,25.8,21)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-17,27,15)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-19,23.4,24)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-15,28.2,9)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-17,27,3)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(5,34.2,-9)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-9,31.8,-9)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-11,30.6,-3)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-7,33,-15)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-11,30.6,-15)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-5,34.2,-21)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(23,23.4,-3)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-3,35.4,-15)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-19,21.6,24)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(7,33,-15)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(0,37.8,-15)&#13;&#10;part.Size = Vector3.new(12,1.2,4)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(21,24.6,-9)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(21,24.6,3)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(11,30.6,-15)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(3,35.4,-15)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,21,-3)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(9,31.8,-9)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(25,22.2,3)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(15,28.2,-3)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(0,36.6,-21)&#13;&#10;part.Size = Vector3.new(12,1.2,8)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(13,29.4,-9)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(19,25.8,-3)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(17,27,-9)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-21,24.6,3)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-17,27,-9)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-15,28.2,-15)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-19,25.8,-3)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-19,25.8,9)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-25,22.2,24)&#13;&#10;part.Size = Vector3.new(6,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-21,24.6,15)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-23,23.4,21)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,21,21)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-25,22.2,15)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-23,21,24)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-23,23.4,9)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-13,29.4,-21)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-9,31.8,-21)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-7,33,-27)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-3,35.4,-27)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(23,23.4,-15)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(25,22.2,-9)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(19,25.8,-15)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(5,34.2,-21)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(9,31.8,-21)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(15,28.2,-15)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(0,37.8,-27)&#13;&#10;part.Size = Vector3.new(12,1.2,4)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(0,36.6,-30)&#13;&#10;part.Size = Vector3.new(6,1.2,8)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(13,29.4,-21)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(3,35.4,-27)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-21,24.6,-21)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-23,23.4,-3)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-25,22.2,-9)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,21,-3)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-23,23.4,-15)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-21,24.6,-9)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,21,9)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-25,22.2,3)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-19,25.8,-15)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-17,27,-21)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-15,28.2,-27)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-19,25.8,-27)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-11,28.2,-30)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-17,27,-30)&#13;&#10;part.Size = Vector3.new(6,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-13,29.4,-30)&#13;&#10;part.Size = Vector3.new(6,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-11,30.6,-27)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-3,33,-30)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-9,31.8,-30)&#13;&#10;part.Size = Vector3.new(6,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-5,34.2,-30)&#13;&#10;part.Size = Vector3.new(6,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-7,30.6,-30)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-6,28.8,-30)&#13;&#10;part.Size = Vector3.new(8,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(7,33,-27)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(7,30.6,-30)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-3,31.2,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(0,33.6,-30)&#13;&#10;part.Size = Vector3.new(4,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(3,31.2,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(11,30.6,-27)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(17,27,-21)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(21,24.6,-21)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,21,-15)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(9,31.8,-30)&#13;&#10;part.Size = Vector3.new(6,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(15,28.2,-27)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(5,34.2,-30)&#13;&#10;part.Size = Vector3.new(6,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(3,33,-30)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-19,23.4,-30)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-23,23.4,-27)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-25,22.2,-21)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-25,22.2,-30)&#13;&#10;part.Size = Vector3.new(6,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,21,-15)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-21,24.6,-30)&#13;&#10;part.Size = Vector3.new(6,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,21,-27)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-15,25.8,-30)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-12,26.4,-30)&#13;&#10;part.Size = Vector3.new(4,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(7,28.8,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(1,28.8,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-9,24,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(5,26.4,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-1,26.4,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(13,29.4,-30)&#13;&#10;part.Size = Vector3.new(6,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-15,24,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(11,28.2,-30)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(25,22.2,-21)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-7,26.4,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(11,26.4,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(19,25.8,-27)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-23,21,-30)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-19,21.6,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(17,27,-30)&#13;&#10;part.Size = Vector3.new(6,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-3,24,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(5,21.6,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(3,24,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(9,24,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(15,24,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,21,-27)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-7,21.6,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(21,24.6,-30)&#13;&#10;part.Size = Vector3.new(6,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(15,25.8,-30)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(19,23.4,-30)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-13,21.6,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-1,21.6,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(23,23.4,-27)&#13;&#10;part.Size = Vector3.new(12,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(11,21.6,-30)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(18,21.6,-30)&#13;&#10;part.Size = Vector3.new(8,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(23,21,-30)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(25,22.2,-30)&#13;&#10;part.Size = Vector3.new(6,1.2,6)&#13;&#10;part.BrickColor = BrickColor.new(21)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-14,15,24)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-14.5,13.2,24)&#13;&#10;part.Size = Vector3.new(1,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-13.5,13.2,24)&#13;&#10;part.Size = Vector3.new(1,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-11,15,24)&#13;&#10;part.Size = Vector3.new(4,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-14.5,9.6,24)&#13;&#10;part.Size = Vector3.new(1,4.8,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-8.5,13.2,24)&#13;&#10;part.Size = Vector3.new(1,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-7.5,13.2,24)&#13;&#10;part.Size = Vector3.new(1,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-8,15,24)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-7.5,9.6,24)&#13;&#10;part.Size = Vector3.new(1,4.8,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-11,6.6,24.5)&#13;&#10;part.Size = Vector3.new(8,1.2,3)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,15,5)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,13.2,4.5)&#13;&#10;part.Size = Vector3.new(1,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,13.2,5.5)&#13;&#10;part.Size = Vector3.new(1,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,15,8)&#13;&#10;part.Size = Vector3.new(4,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,9.6,4.5)&#13;&#10;part.Size = Vector3.new(1,4.8,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,13.2,10.5)&#13;&#10;part.Size = Vector3.new(1,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,13.2,11.5)&#13;&#10;part.Size = Vector3.new(1,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,15,11)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,9.6,11.5)&#13;&#10;part.Size = Vector3.new(1,4.8,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27.5,6.6,8)&#13;&#10;part.Size = Vector3.new(8,1.2,3)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,15,-11)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,13.2,-10.5)&#13;&#10;part.Size = Vector3.new(1,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,13.2,-11.5)&#13;&#10;part.Size = Vector3.new(1,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,15,-14)&#13;&#10;part.Size = Vector3.new(4,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,9.6,-10.5)&#13;&#10;part.Size = Vector3.new(1,4.8,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,13.2,-16.5)&#13;&#10;part.Size = Vector3.new(1,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,13.2,-17.5)&#13;&#10;part.Size = Vector3.new(1,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,15,-17)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,9.6,-17.5)&#13;&#10;part.Size = Vector3.new(1,4.8,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27.5,6.6,-14)&#13;&#10;part.Size = Vector3.new(8,1.2,3)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,15,-17)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,13.2,-17.5)&#13;&#10;part.Size = Vector3.new(1,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,13.2,-16.5)&#13;&#10;part.Size = Vector3.new(1,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,15,-14)&#13;&#10;part.Size = Vector3.new(4,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,9.6,-17.5)&#13;&#10;part.Size = Vector3.new(1,4.8,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,13.2,-11.5)&#13;&#10;part.Size = Vector3.new(1,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,13.2,-10.5)&#13;&#10;part.Size = Vector3.new(1,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,15,-11)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27,9.6,-10.5)&#13;&#10;part.Size = Vector3.new(1,4.8,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-27.5,6.6,-14)&#13;&#10;part.Size = Vector3.new(8,1.2,3)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,15,11)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,13.2,11.5)&#13;&#10;part.Size = Vector3.new(1,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,13.2,10.5)&#13;&#10;part.Size = Vector3.new(1,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,15,8)&#13;&#10;part.Size = Vector3.new(4,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,9.6,11.5)&#13;&#10;part.Size = Vector3.new(1,4.8,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,13.2,5.5)&#13;&#10;part.Size = Vector3.new(1,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,13.2,4.5)&#13;&#10;part.Size = Vector3.new(1,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,15,5)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27,9.6,4.5)&#13;&#10;part.Size = Vector3.new(1,4.8,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(27.5,6.6,8)&#13;&#10;part.Size = Vector3.new(8,1.2,3)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(14,15,-30)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(14.5,13.2,-30)&#13;&#10;part.Size = Vector3.new(1,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(13.5,13.2,-30)&#13;&#10;part.Size = Vector3.new(1,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(11,15,-30)&#13;&#10;part.Size = Vector3.new(4,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(14.5,9.6,-30)&#13;&#10;part.Size = Vector3.new(1,4.8,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(8.5,13.2,-30)&#13;&#10;part.Size = Vector3.new(1,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(7.5,13.2,-30)&#13;&#10;part.Size = Vector3.new(1,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(8,15,-30)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(7.5,9.6,-30)&#13;&#10;part.Size = Vector3.new(1,4.8,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(11,6.6,-30.5)&#13;&#10;part.Size = Vector3.new(8,1.2,3)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-8,15,-30)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-7.5,13.2,-30)&#13;&#10;part.Size = Vector3.new(1,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-8.5,13.2,-30)&#13;&#10;part.Size = Vector3.new(1,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-11,15,-30)&#13;&#10;part.Size = Vector3.new(4,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-7.5,9.6,-30)&#13;&#10;part.Size = Vector3.new(1,4.8,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-13.5,13.2,-30)&#13;&#10;part.Size = Vector3.new(1,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-14.5,13.2,-30)&#13;&#10;part.Size = Vector3.new(1,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-14,15,-30)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-14.5,9.6,-30)&#13;&#10;part.Size = Vector3.new(1,4.8,2)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-11,6.6,-30.5)&#13;&#10;part.Size = Vector3.new(8,1.2,3)&#13;&#10;part.BrickColor = BrickColor.new(38)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-19,45,16)&#13;&#10;part.Size = Vector3.new(6,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(153)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-19,43.2,14)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-17,45,12)&#13;&#10;part.Size = Vector3.new(6,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(153)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-17,43.2,18)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-15,45,18)&#13;&#10;part.Size = Vector3.new(6,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(153)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-17,40.8,12)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-15,40.8,18)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-19,40.8,16)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-19,38.4,14)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-17,38.4,18)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-15,43.2,12)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-15,38.4,12)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-17,36,12)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-19,36,16)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-15,36,18)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-15,33.6,12)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-19,33.6,14)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-17,33.6,18)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-17,31.2,12)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-19,31.2,15)&#13;&#10;part.Size = Vector3.new(4,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-13,33.6,16)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-13,43.2,16)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-13,38.4,16)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-13,40.8,14)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-13,36,14)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-13,31.8,15)&#13;&#10;part.Size = Vector3.new(8,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-13,45,14)&#13;&#10;part.Size = Vector3.new(6,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(153)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-19,28.8,12)&#13;&#10;part.Size = Vector3.new(2,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-17,29.4,12)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-19,28.8,16)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-17,29.4,18)&#13;&#10;part.Size = Vector3.new(2,1.2,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;&#13;&#10;part = template:clone()&#13;&#10;part.Position = offset + Vector3.new(-17,31.2,18)&#13;&#10;part.Size = Vector3.new(6,2.4,2)&#13;&#10;part.BrickColor = BrickColor.new(5)&#13;&#10;part.Parent = game.Workspace.House wait(.01)&#13;&#10;part.Name = &quot;Base&quot;&#13;&#10;children = game.Workspace.House:children()&#13;&#10;for i=1,#children do&#13;&#10;&#9;if(children[i].Name ~= &quot;Base&quot;) then stick(game.Workspace.House.Base, children[i]) end&#13;&#10;&#9;children[i].Anchored = false&#13;&#10;end&#13;&#10;end&#13;&#10;&#13;&#10;function onButton1Down(mouse)&#13;&#10;&#9;mouse.Icon = &quot;rbxasset://textures\\GunWaitCursor.png&quot;&#13;&#10;&#9;print(&quot;trigger&quot;)&#13;&#10;&#9;spawnHouse(mouse.Hit.p)&#13;&#10;&#9;print(&quot;spawned&quot;)&#13;&#10;&#9;mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;&#13;&#10;end&#13;&#10;&#13;&#10;&#13;&#10;function onSelected(mouse)&#13;&#10;&#9;print(&quot;Action Tool Selected&quot;)&#13;&#10;&#9;mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;&#13;&#10;&#9;mouse.Button1Down:connect(function() onButton1Down(mouse) end)&#13;&#10;end&#13;&#10;&#13;&#10;bin.Selected:connect(onSelected)</string>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="HopperBin" referent="RBX71">
				<Properties>
					<token name="BinType">0</token>
					<string name="Name">Teleport</string>
					<Content name="TextureId"><null></null></Content>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Script" referent="RBX72">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">TeleportScript</string>
						<string name="Source">--- SonOfSevenless&#13;&#10;bin = script.Parent&#13;&#10;sfx = bin.Sound&#13;&#10;&#13;&#10;function teleportPlayer(pos)&#13;&#10;&#13;&#10;&#9;local player = game.Players.LocalPlayer&#13;&#10;&#9;if player == nil or player.Character == nil then return end&#13;&#10;&#13;&#10;&#9;local char = player.Character.Torso&#13;&#10;&#13;&#10;&#9;char.CFrame = CFrame.new(Vector3.new(pos.x, pos.y + 7, pos.z))&#13;&#10;&#13;&#10;end&#13;&#10;&#13;&#10;&#13;&#10;enabled = true&#13;&#10;function onButton1Down(mouse)&#13;&#10;&#9;if not enabled then&#13;&#10;&#9;&#9;return&#13;&#10;&#9;end&#13;&#10;&#13;&#10;&#9;local player = game.Players.LocalPlayer&#13;&#10;&#9;if player == nil then return end&#13;&#10;&#9;local cf = mouse.Hit&#13;&#10;&#9;teleportPlayer(cf.p)&#13;&#10;&#9;sfx:play()&#13;&#10;&#13;&#10;end&#13;&#10;&#13;&#10;function onSelected(mouse)&#13;&#10;&#9;mouse.Icon = &quot;rbxasset://textures\\ArrowCursor.png&quot;&#13;&#10;&#9;mouse.Button1Down:connect(function() onButton1Down(mouse) end)&#13;&#10;end&#13;&#10;&#13;&#10;bin.Selected:connect(onSelected)&#13;&#10;&#13;&#10;</string>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX73">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">Sound</string>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.roblox.com/asset/?id=1079839</url></Content>
						<float name="Volume">0.300000012</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="HopperBin" referent="RBX74">
				<Properties>
					<token name="BinType">0</token>
					<string name="Name">Fire Shield</string>
					<Content name="TextureId"><null></null></Content>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Script" referent="RBX75">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Script</string>
						<string name="Source">--clockwork&#13;&#10;&#13;&#10;local bin = script.Parent&#13;&#10;&#13;&#10;function getX(t)&#13;&#10;&#9;return 41 * math.cos(t) - 18 * math.sin(t) - 83 * math.cos(2 * t) - 11 * math.cos(3 * t) + 27 * math.sin(3 * t)&#13;&#10;end&#13;&#10;&#13;&#10;function getY(t)&#13;&#10;&#9;return 36 * math.cos(t) + 27 * math.sin(t) - 113 * math.cos(2 * t) + 30 * math.sin(2 * t) + 11 * math.cos(3 * t) - 27 * math.sin(3 * t)&#13;&#10;end&#13;&#10;&#13;&#10;function getZ(t)&#13;&#10;&#9;return 45 * math.sin(t) - 30 * math.cos(2 * t) + 113 * math.sin(2 * t) - 11 * math.cos(3 * t) + 27 * math.sin(3 * t)&#13;&#10;end&#13;&#10;&#13;&#10;template = Instance.new(&quot;Explosion&quot;)&#13;&#10;template.BlastRadius = 3&#13;&#10;&#13;&#10;&#13;&#10;spew = false&#13;&#10;function onButton1Down(mouse)&#13;&#10;&#9;local player = game.Players.LocalPlayer&#13;&#10;&#9;if player == nil then return end&#13;&#10;&#9;print(&quot;trigger&quot;)&#13;&#10;&#9;-- find the best cf&#13;&#10;&#9;&#13;&#10;&#9;spew = not spew&#13;&#10;&#9;i = 0&#13;&#10;&#9;while spew do&#13;&#10;&#9;&#9;i = i + .15&#13;&#10;&#9;&#9;part = template:clone()&#13;&#10;&#9;&#9;part.Position = player.Character.Torso.Position + Vector3.new(getX(i) / 5, getY(i) / 5, getZ(i) / 5)&#13;&#10;&#9;&#9;part.Parent = game.Workspace&#13;&#10;&#9;&#9;part = template:clone()&#13;&#10;&#9;&#9;part.Position = player.Character.Torso.Position - Vector3.new(getX(i) / 5, getY(i) / 5, getZ(i) / 5)&#13;&#10;&#9;&#9;part.Parent = game.Workspace&#13;&#10;&#9;&#9;wait(.025)&#13;&#10;&#9;end&#13;&#10;end&#13;&#10;&#13;&#10;function onSelected(mouse)&#13;&#10;&#9;print(&quot;select&quot;)&#13;&#10;&#9;mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;&#13;&#10;&#9;mouse.Button1Down:connect(function() onButton1Down(mouse) end)&#13;&#10;end&#13;&#10;&#13;&#10;bin.Selected:connect(onSelected)&#13;&#10;</string>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="HopperBin" referent="RBX76">
				<Properties>
					<token name="BinType">0</token>
					<string name="Name">Wall Gun</string>
					<Content name="TextureId"><null></null></Content>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Script" referent="RBX77">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Script</string>
						<string name="Source">--clockwork&#13;&#10;&#13;&#10;local bin = script.Parent&#13;&#10;local sfx = bin.Sound&#13;&#10;&#13;&#10;local template = Instance.new(&quot;Part&quot;)&#13;&#10;template.Size = Vector3.new(10,8,2)&#13;&#10;template.BrickColor = BrickColor.Random()&#13;&#10;local bodypos = Instance.new(&quot;BodyPosition&quot;)&#13;&#10;bodypos.maxForce = Vector3.new(4e+07, 4e+07, 4e+07)&#13;&#10;bodypos.P = 2.5e+003&#13;&#10;bodypos.Parent = template&#13;&#10;local bodygyro = Instance.new(&quot;BodyGyro&quot;)&#13;&#10;bodygyro.Parent = template&#13;&#10;local script = Instance.new(&quot;Script&quot;)&#13;&#10;script.Source = &quot;wait(20) script.Parent:remove()&quot;&#13;&#10;script.Parent = template&#13;&#10;&#13;&#10;function stick(x, y)&#13;&#10;&#9;weld = Instance.new(&quot;Weld&quot;) &#13;&#10;&#13;&#10;&#9;weld.Part0 = x&#13;&#10;&#9;weld.Part1 = y&#13;&#10;&#13;&#10;&#9;local HitPos = x.Position&#13;&#10;&#13;&#10;&#9;local CJ = CFrame.new(HitPos) &#13;&#10;&#9;local C0 = x.CFrame:inverse() *CJ &#13;&#10;&#9;local C1 = y.CFrame:inverse() * CJ &#13;&#10;&#13;&#10;&#9;weld.C0 = C0 &#13;&#10;&#9;weld.C1 = C1 &#13;&#10;&#9;&#13;&#10;&#9;weld.Parent = x&#13;&#10;end&#13;&#10;&#13;&#10;function onButton1Down(mouse)&#13;&#10;&#9;local player = game.Players.LocalPlayer&#13;&#10;&#9;if player == nil then return end&#13;&#10;&#9;print(&quot;trigger&quot;)&#13;&#10;&#9;-- find the best cf&#13;&#10;&#13;&#10;&#9;sfx:play()&#13;&#10;&#9;startPos = player.Character.Torso.Position&#13;&#10;&#9;dest = mouse.Hit.p&#13;&#10;&#9;delta = dest - startPos&#13;&#10;&#9;part = template:clone()&#13;&#10;&#9;part.CFrame = CFrame.new(startPos + delta.unit * 5, dest)&#13;&#10;&#9;part.BodyGyro.cframe = part.CFrame&#13;&#10;&#9;part.BodyPosition.position = dest&#13;&#10;&#9;part.Touched:connect(function(hit) if(hit.Parent:findFirstChild(&quot;Humanoid&quot;) ~= nil) then stick(hit.Parent.Torso, part) end end)&#13;&#10;&#9;part.Parent = game.Workspace&#13;&#10;end&#13;&#10;&#13;&#10;function onSelected(mouse)&#13;&#10;&#9;print(&quot;select&quot;)&#13;&#10;&#9;mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;&#13;&#10;&#9;mouse.Button1Down:connect(function() onButton1Down(mouse) end)&#13;&#10;end&#13;&#10;&#13;&#10;bin.Selected:connect(onSelected)&#13;&#10;</string>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX78">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">Sound</string>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>rbxasset://sounds\\short spring sound.wav</url></Content>
						<float name="Volume">1</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="HopperBin" referent="RBX79">
				<Properties>
					<token name="BinType">0</token>
					<string name="Name">Force Push</string>
					<Content name="TextureId"><null></null></Content>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Script" referent="RBX80">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Script</string>
						<string name="Source">--clockwork&#13;&#10;&#13;&#10;local bin = script.Parent&#13;&#10;local sfx = bin.Sound&#13;&#10;&#13;&#10;local template = Instance.new(&quot;Part&quot;)&#13;&#10;template.Size = Vector3.new(10,8,2)&#13;&#10;template.BrickColor = BrickColor.Random()&#13;&#10;local bodypos = Instance.new(&quot;BodyVelocity&quot;)&#13;&#10;bodypos.maxForce = Vector3.new(4e+07, 4e+07, 4e+07)&#13;&#10;bodypos.P = 2.5e+003&#13;&#10;bodypos.Parent = template&#13;&#10;local bodygyro = Instance.new(&quot;BodyGyro&quot;)&#13;&#10;bodygyro.Parent = template&#13;&#10;local script = Instance.new(&quot;Script&quot;)&#13;&#10;script.Source = &quot;wait(10) script.Parent.BodyVelocity:remove() wait(5) script.Parent:remove()&quot;&#13;&#10;script.Parent = template&#13;&#10;&#13;&#10;function stick(x, y)&#13;&#10;&#9;weld = Instance.new(&quot;Weld&quot;) &#13;&#10;&#13;&#10;&#9;weld.Part0 = x&#13;&#10;&#9;weld.Part1 = y&#13;&#10;&#13;&#10;&#9;local HitPos = x.Position&#13;&#10;&#13;&#10;&#9;local CJ = CFrame.new(HitPos) &#13;&#10;&#9;local C0 = x.CFrame:inverse() *CJ &#13;&#10;&#9;local C1 = y.CFrame:inverse() * CJ &#13;&#10;&#13;&#10;&#9;weld.C0 = C0 &#13;&#10;&#9;weld.C1 = C1 &#13;&#10;&#9;&#13;&#10;&#9;weld.Parent = x&#13;&#10;end&#13;&#10;&#13;&#10;function onButton1Down(mouse)&#13;&#10;&#9;local player = game.Players.LocalPlayer&#13;&#10;&#9;if player == nil then return end&#13;&#10;&#9;print(&quot;trigger&quot;)&#13;&#10;&#9;-- find the best cf&#13;&#10;&#13;&#10;&#9;sfx:play()&#13;&#10;&#9;startPos = player.Character.Torso.Position&#13;&#10;&#9;dest = mouse.Hit.p&#13;&#10;&#9;delta = dest - startPos&#13;&#10;&#9;part = template:clone()&#13;&#10;&#9;part.CFrame = CFrame.new(startPos + delta.unit * 5, dest)&#13;&#10;&#9;part.BodyGyro.cframe = part.CFrame&#13;&#10;&#9;part.BodyVelocity.velocity = delta.unit * 40&#13;&#10;&#9;part.Touched:connect(function(hit) if(hit.Parent:findFirstChild(&quot;Humanoid&quot;) ~= nil) then stick(hit.Parent.Torso, part) end end)&#13;&#10;&#9;part.Parent = game.Workspace&#13;&#10;end&#13;&#10;&#13;&#10;function onSelected(mouse)&#13;&#10;&#9;print(&quot;select&quot;)&#13;&#10;&#9;mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;&#13;&#10;&#9;mouse.Button1Down:connect(function() onButton1Down(mouse) end)&#13;&#10;end&#13;&#10;&#13;&#10;bin.Selected:connect(onSelected)&#13;&#10;</string>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX81">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">Sound</string>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>rbxasset://sounds\\short spring sound.wav</url></Content>
						<float name="Volume">1</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
		</Item>
	</Item>
</roblox>


