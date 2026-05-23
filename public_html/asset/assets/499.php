<roblox xmlns:xmime="http://www.w3.org/2005/05/xmlmime" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="http://www.emeraldolds.glados.pro/roblox.xsd" version="4">
	<External>null</External>
	<External>nil</External>
	<Item class="Part" referent="RBX0">
		<Properties>
			<bool name="Anchored">false</bool>
			<float name="BackParamA">-0.5</float>
			<float name="BackParamB">0.5</float>
			<token name="BackSurface">2</token>
			<token name="BackSurfaceInput">0</token>
			<float name="BottomParamA">-0.5</float>
			<float name="BottomParamB">0.5</float>
			<token name="BottomSurface">2</token>
			<token name="BottomSurfaceInput">0</token>
			<int name="BrickColor">24</int>
			<CoordinateFrame name="CFrame">
				<X>-63</X>
				<Y>36.5</Y>
				<Z>-57</Z>
				<R00>0</R00>
				<R01>0</R01>
				<R02>1</R02>
				<R10>-1</R10>
				<R11>0</R11>
				<R12>0</R12>
				<R20>0</R20>
				<R21>-1</R21>
				<R22>0</R22>
			</CoordinateFrame>
			<bool name="CanCollide">true</bool>
			<bool name="DraggingV1">false</bool>
			<float name="Elasticity">0.5</float>
			<token name="FormFactor">0</token>
			<float name="Friction">0.300000012</float>
			<float name="FrontParamA">-0.5</float>
			<float name="FrontParamB">0.5</float>
			<token name="FrontSurface">2</token>
			<token name="FrontSurfaceInput">0</token>
			<float name="LeftParamA">-0.100000001</float>
			<float name="LeftParamB">0.100000001</float>
			<token name="LeftSurface">7</token>
			<token name="LeftSurfaceInput">0</token>
			<bool name="Locked">false</bool>
			<token name="Material">256</token>
			<string name="Name">Smooth Block Model</string>
			<float name="Reflectance">0</float>
			<float name="RightParamA">-0.5</float>
			<float name="RightParamB">0.5</float>
			<token name="RightSurface">2</token>
			<token name="RightSurfaceInput">0</token>
			<Vector3 name="RotVelocity">
				<X>0</X>
				<Y>0</Y>
				<Z>0</Z>
			</Vector3>
			<float name="TopParamA">-0.5</float>
			<float name="TopParamB">0.5</float>
			<token name="TopSurface">2</token>
			<token name="TopSurfaceInput">0</token>
			<float name="Transparency">0.400000006</float>
			<Vector3 name="Velocity">
				<X>0</X>
				<Y>0</Y>
				<Z>0</Z>
			</Vector3>
			<bool name="archivable">true</bool>
			<token name="shape">2</token>
			<Vector3 name="size">
				<X>2</X>
				<Y>2</Y>
				<Z>2</Z>
			</Vector3>
		</Properties>
		<Item class="BodyThrust" referent="RBX1">
			<Properties>
				<string name="Name">BodyThrust</string>
				<bool name="archivable">true</bool>
				<Vector3 name="force">
					<X>-2000</X>
					<Y>0</Y>
					<Z>0</Z>
				</Vector3>
				<Vector3 name="location">
					<X>0</X>
					<Y>0</Y>
					<Z>0</Z>
				</Vector3>
			</Properties>
		</Item>
		<Item class="ClickDetector" referent="RBX2">
			<Properties>
				<float name="MaxActivationDistance">1000</float>
				<string name="Name">ClickDetector</string>
				<bool name="archivable">true</bool>
			</Properties>
		</Item>
		<Item class="Script" referent="RBX3">
			<Properties>
				<bool name="Disabled">false</bool>
				<Content name="LinkedSource"><null></null></Content>
				<string name="Name">Script</string>
				<ProtectedString name="Source">local x = Vector3.new(-2000, 0, 0)
local z = Vector3.new(0, 0, 0)
local a = BrickColor.new(&quot;Black&quot;)
local b = BrickColor.new(&quot;Bright yellow&quot;)

function onClicked()
	if script.Parent.BodyThrust.force == x then
		script.Parent.BodyThrust.force = z
		script.Parent.BrickColor = a
	else
		script.Parent.BodyThrust.force = x
		script.Parent.BrickColor = b
	end

end

script.Parent.ClickDetector.MouseClick:connect(onClicked)</ProtectedString>
				<bool name="archivable">true</bool>
			</Properties>
		</Item>
	</Item>
</roblox>


