<roblox xmlns:xmime="http://www.w3.org/2005/05/xmlmime" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="http://www.emeraldolds.glados.pro/roblox.xsd" version="4">
	<External>null</External>
	<External>nil</External>
	<Item class="Model" referent="RBX0">
		<Properties>
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
			<string name="Name">Vehicle</string>
			<Ref name="PrimaryPart">null</Ref>
			<bool name="archivable">true</bool>
		</Properties>
		<Item class="Script" referent="RBX1">
			<Properties>
				<bool name="Disabled">false</bool>
				<Content name="LinkedSource"><null></null></Content>
				<string name="Name">Script</string>
				<ProtectedString name="Source">system = script.Parent
model = system.Station --
backup = model:Clone()
regen = system.Regen

function checkRegen()
	if regen.Value == 1 then

		model:remove()

		wait(1)
		model = backup:Clone()
		model.Parent = system
		model:MakeJoints()
	end
end
regen.Changed:connect(checkRegen)</ProtectedString>
				<bool name="archivable">true</bool>
			</Properties>
		</Item>
		<Item class="IntValue" referent="RBX2">
			<Properties>
				<string name="Name">Regen</string>
				<int name="Value">0</int>
				<bool name="archivable">true</bool>
			</Properties>
		</Item>
		<Item class="Part" referent="RBX3">
			<Properties>
				<bool name="Anchored">true</bool>
				<float name="BackParamA">-0.5</float>
				<float name="BackParamB">0.5</float>
				<token name="BackSurface">0</token>
				<token name="BackSurfaceInput">0</token>
				<float name="BottomParamA">-0.5</float>
				<float name="BottomParamB">0.5</float>
				<token name="BottomSurface">0</token>
				<token name="BottomSurfaceInput">0</token>
				<int name="BrickColor">104</int>
				<CoordinateFrame name="CFrame">
					<X>222.090454</X>
					<Y>2.02986312</Y>
					<Z>-76.4020996</Z>
					<R00>0.999933124</R00>
					<R01>-0.000173735054</R01>
					<R02>-0.0115658771</R02>
					<R10>0.000163880613</R10>
					<R11>0.999999642</R11>
					<R12>-0.000852969708</R12>
					<R20>0.0115660205</R20>
					<R21>0.00085101719</R21>
					<R22>0.999932766</R22>
				</CoordinateFrame>
				<bool name="CanCollide">false</bool>
				<bool name="DraggingV1">false</bool>
				<float name="Elasticity">0</float>
				<token name="FormFactor">1</token>
				<float name="Friction">1</float>
				<float name="FrontParamA">-0.5</float>
				<float name="FrontParamB">0.5</float>
				<token name="FrontSurface">0</token>
				<token name="FrontSurfaceInput">0</token>
				<float name="LeftParamA">-0.5</float>
				<float name="LeftParamB">0.5</float>
				<token name="LeftSurface">0</token>
				<token name="LeftSurfaceInput">0</token>
				<bool name="Locked">true</bool>
				<token name="Material">256</token>
				<string name="Name">Button</string>
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
				<bool name="archivable">true</bool>
				<token name="shape">1</token>
				<Vector3 name="size">
					<X>2</X>
					<Y>0.400000006</Y>
					<Z>2</Z>
				</Vector3>
			</Properties>
			<Item class="Script" referent="RBX4">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Activate</string>
					<ProtectedString name="Source">button = script.Parent
regen = button.Parent.Regen

local debounce = false

function onTouch(hit)
	local h = hit.Parent:FindFirstChild(&quot;Humanoid&quot;)
	if h ~= nil and debounce == false then
		debounce = true
		button.BrickColor = BrickColor.Black()
		regen.Value = 1
		wait(1)
		regen.Value = 0
		wait(5)
		button.BrickColor = BrickColor.new(104)
		debounce = false
	end
end
button.Touched:connect(onTouch)</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="CylinderMesh" referent="RBX5">
				<Properties>
					<float name="Bevel">0</float>
					<float name="Bevel Roundness">0</float>
					<float name="Bulge">0</float>
					<token name="LODX">2</token>
					<token name="LODY">2</token>
					<string name="Name">Mesh</string>
					<Vector3 name="Offset">
						<X>0</X>
						<Y>0</Y>
						<Z>0</Z>
					</Vector3>
					<Vector3 name="Scale">
						<X>1</X>
						<Y>1</Y>
						<Z>1</Z>
					</Vector3>
					<Vector3 name="VertexColor">
						<X>1</X>
						<Y>1</Y>
						<Z>1</Z>
					</Vector3>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Model" referent="RBX6">
			<Properties>
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
				<string name="Name">Vehicle Spawner</string>
				<Ref name="PrimaryPart">null</Ref>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Part" referent="RBX7">
				<Properties>
					<bool name="Anchored">true</bool>
					<float name="BackParamA">-0.5</float>
					<float name="BackParamB">0.5</float>
					<token name="BackSurface">0</token>
					<token name="BackSurfaceInput">0</token>
					<float name="BottomParamA">-0.5</float>
					<float name="BottomParamB">0.5</float>
					<token name="BottomSurface">0</token>
					<token name="BottomSurfaceInput">0</token>
					<int name="BrickColor">199</int>
					<CoordinateFrame name="CFrame">
						<X>222.090393</X>
						<Y>2.42962456</Y>
						<Z>-76.4017944</Z>
						<R00>-0.0115658771</R00>
						<R01>-0.000173735054</R01>
						<R02>-0.999933124</R02>
						<R10>-0.000852969708</R10>
						<R11>0.999999642</R11>
						<R12>-0.000163880613</R12>
						<R20>0.999932766</R20>
						<R21>0.00085101719</R21>
						<R22>-0.0115660205</R22>
					</CoordinateFrame>
					<bool name="CanCollide">true</bool>
					<bool name="DraggingV1">false</bool>
					<float name="Elasticity">0.5</float>
					<token name="FormFactor">1</token>
					<float name="Friction">1</float>
					<float name="FrontParamA">-0.5</float>
					<float name="FrontParamB">0.5</float>
					<token name="FrontSurface">0</token>
					<token name="FrontSurfaceInput">0</token>
					<float name="LeftParamA">-0.5</float>
					<float name="LeftParamB">0.5</float>
					<token name="LeftSurface">0</token>
					<token name="LeftSurfaceInput">0</token>
					<bool name="Locked">true</bool>
					<token name="Material">256</token>
					<string name="Name">Head</string>
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
					<float name="Transparency">0.980000019</float>
					<Vector3 name="Velocity">
						<X>0</X>
						<Y>0</Y>
						<Z>0</Z>
					</Vector3>
					<bool name="archivable">true</bool>
					<token name="shape">1</token>
					<Vector3 name="size">
						<X>2</X>
						<Y>0.400000006</Y>
						<Z>2</Z>
					</Vector3>
				</Properties>
			</Item>
			<Item class="Humanoid" referent="RBX8">
				<Properties>
					<float name="Health">0</float>
					<float name="MaxHealth">0</float>
					<string name="Name">Humanoid</string>
					<float name="WalkSpeed">0</float>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
	</Item>
</roblox>


