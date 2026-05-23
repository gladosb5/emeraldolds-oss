<roblox xmlns:xmime="http://www.w3.org/2005/05/xmlmime" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="http://www.emeraldolds.glados.pro/roblox.xsd" version="4">
	<External>null</External>
	<External>nil</External>
	<Item class="Part" referent="RBX0">
		<Properties>
			<bool name="Anchored">true</bool>
			<float name="BackParamA">-0.5</float>
			<float name="BackParamB">0.5</float>
			<token name="BackSurface">0</token>
			<token name="BackSurfaceInput">0</token>
			<float name="BottomParamA">-0.5</float>
			<float name="BottomParamB">0.5</float>
			<token name="BottomSurface">4</token>
			<token name="BottomSurfaceInput">0</token>
			<int name="BrickColor">199</int>
			<CoordinateFrame name="CFrame">
				<X>84.5</X>
				<Y>393.399994</Y>
				<Z>-188.5</Z>
				<R00>0</R00>
				<R01>0</R01>
				<R02>-1</R02>
				<R10>0</R10>
				<R11>1</R11>
				<R12>0</R12>
				<R20>1</R20>
				<R21>0</R21>
				<R22>0</R22>
			</CoordinateFrame>
			<bool name="CanCollide">true</bool>
			<bool name="DraggingV1">false</bool>
			<float name="Elasticity">0.5</float>
			<token name="FormFactor">1</token>
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
			<string name="Name">Vortex1</string>
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
			<token name="TopSurface">3</token>
			<token name="TopSurfaceInput">0</token>
			<float name="Transparency">1</float>
			<Vector3 name="Velocity">
				<X>0</X>
				<Y>0</Y>
				<Z>0</Z>
			</Vector3>
			<bool name="archivable">true</bool>
			<token name="shape">1</token>
			<Vector3 name="size">
				<X>17</X>
				<Y>1.20000005</Y>
				<Z>17</Z>
			</Vector3>
		</Properties>
		<Item class="Script" referent="RBX1">
			<Properties>
				<bool name="Disabled">false</bool>
				<Content name="LinkedSource"><null></null></Content>
				<string name="Name">VortexScript</string>
				<ProtectedString name="Source">function onTouch(hit)
	if (isOn == false) then return end
	local human = hit.Parent:findFirstChild(&quot;Humanoid&quot;)
	if (human ~= nil) then
		
		local t = hit.Parent.Torso
		local dir = Vector3.new(-1,0,0)

		t.CFrame = CFrame.new(game.Workspace.Vortex2.Position + (5 * dir))

		--local v = Vector3.new(-t.Velocity.y, t.Velocity.x, t.Velocity.z)

		--t.Velocity = v

		local pos = Instance.new(&quot;BodyPosition&quot;)
		pos.position = Vector3.new(0,400,0)
		pos.maxForce = Vector3.new(1e4,1e4,1e4)
		pos.Parent = t
		wait(2)
		pos.Parent = nil

	end
end

connection = script.Parent.Touched:connect(onTouch)
</ProtectedString>
				<bool name="archivable">true</bool>
			</Properties>
		</Item>
		<Item class="Decal" referent="RBX2">
			<Properties>
				<token name="Face">1</token>
				<string name="Name">Decal</string>
				<float name="Shiny">20</float>
				<float name="Specular">0</float>
				<Content name="Texture"><url>http://www.emeraldolds.glados.pro/asset/?id=2590541</url></Content>
				<bool name="archivable">true</bool>
			</Properties>
		</Item>
	</Item>
</roblox>


