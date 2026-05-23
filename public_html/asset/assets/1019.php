<roblox xmlns:xmime="http://www.w3.org/2005/05/xmlmime" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="http://www.roblox.com/roblox.xsd" version="4">
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
			<string name="Name">DirtBike</string>
			<Ref name="PrimaryPart">null</Ref>
			<bool name="archivable">true</bool>
		</Properties>
		<Item class="Model" referent="RBX1">
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
				<string name="Name">Plane</string>
				<Ref name="PrimaryPart">null</Ref>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Model" referent="RBX2">
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
					<string name="Name">Parts</string>
					<Ref name="PrimaryPart">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Script" referent="RBX3">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Script</string>
						<ProtectedString name="Source">position = script.Parent.Engine.Position
local frame = Instance.new(&quot;CFrameValue&quot;)
frame.Name = &quot;OriginCFrame&quot;
frame.Value = script.Parent.Engine.CFrame
frame.Parent = script.Parent

local object = Instance.new(&quot;ObjectValue&quot;)
object.Value = script.Parent.Parent.Parent

seat = script.Parent.Seat

function onChildAdded(part)
	if part.className == &quot;Weld&quot; then
		local torso = part.Part1
		if torso ~= nil then
			local parent = torso.Parent
			if parent ~= nil then
				script.Parent.Parent.Parent = parent
				while true do
					wait(2)
					local pos = script.Parent.Engine.Position
					if (position - pos).magnitude &gt; 30 then
						if object.Value ~= nil then
							object.Value.Regen.Value = 0
							wait(.5)
							object.Value.Regen.Value = 0
							object.Value = nil
						end
					break end
				end
				while true do
					print(&quot;Loop&quot;)
					wait(2)
					if part == nil then
						script.Parent.Parent.Parent = game.Workspace
						script.Parent.Parent:MakeJoints()
					break end
				end
			end
		end
	end
end
seat.ChildAdded:connect(onChildAdded)</ProtectedString>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Model" referent="RBX4">
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
						<string name="Name">Frontwhl</string>
						<Ref name="PrimaryPart">null</Ref>
						<bool name="archivable">true</bool>
					</Properties>
					<Item class="Part" referent="RBX5">
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
							<int name="BrickColor">199</int>
							<CoordinateFrame name="CFrame">
								<X>-223.500015</X>
								<Y>154.399994</Y>
								<Z>10.500001</Z>
								<R00>-2.08713323e-015</R00>
								<R01>7.10542736e-015</R01>
								<R02>-1</R02>
								<R10>0</R10>
								<R11>1</R11>
								<R12>-7.10542736e-015</R12>
								<R20>1</R20>
								<R21>0</R21>
								<R22>2.08713323e-015</R22>
							</CoordinateFrame>
							<bool name="CanCollide">true</bool>
							<bool name="DraggingV1">false</bool>
							<float name="Elasticity">0.200000003</float>
							<token name="FormFactor">1</token>
							<float name="Friction">0.200000003</float>
							<float name="FrontParamA">-0.5</float>
							<float name="FrontParamB">0.5</float>
							<token name="FrontSurface">0</token>
							<token name="FrontSurfaceInput">0</token>
							<float name="LeftParamA">-0.5</float>
							<float name="LeftParamB">0.5</float>
							<token name="LeftSurface">3</token>
							<token name="LeftSurfaceInput">0</token>
							<bool name="Locked">false</bool>
							<token name="Material">256</token>
							<string name="Name">FrontWheel_i1</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">4</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>2.10786541e-010</X>
								<Y>2.43004861e-009</Y>
								<Z>-5.32704922e-011</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">0</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>-1.79747204e-007</X>
								<Y>0.0122267175</Y>
								<Z>2.69650786e-006</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>1.20000005</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX6">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><url>http://www.emeraldolds.glados.pro/asset?id=3270017</url></Content>
								<token name="MeshType">5</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>1.60000002</X>
									<Y>1.60000002</Y>
									<Z>2.5999999</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="Part" referent="RBX7">
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
							<int name="BrickColor">199</int>
							<CoordinateFrame name="CFrame">
								<X>-223.500015</X>
								<Y>154.399994</Y>
								<Z>10.500001</Z>
								<R00>-2.08713323e-015</R00>
								<R01>7.10542736e-015</R01>
								<R02>-1</R02>
								<R10>0</R10>
								<R11>1</R11>
								<R12>-7.10542736e-015</R12>
								<R20>1</R20>
								<R21>0</R21>
								<R22>2.08713323e-015</R22>
							</CoordinateFrame>
							<bool name="CanCollide">true</bool>
							<bool name="DraggingV1">false</bool>
							<float name="Elasticity">0.200000003</float>
							<token name="FormFactor">1</token>
							<float name="Friction">0.200000003</float>
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
							<string name="Name">Front_Center</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>2.10786541e-010</X>
								<Y>2.43004861e-009</Y>
								<Z>-5.32704922e-011</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">0</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>-1.79747204e-007</X>
								<Y>0.0122267175</Y>
								<Z>2.69650786e-006</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>1.20000005</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX8">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><null></null></Content>
								<token name="MeshType">3</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.600000024</X>
									<Y>0.5</Y>
									<Z>0.200000003</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="Part" referent="RBX9">
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
							<int name="BrickColor">199</int>
							<CoordinateFrame name="CFrame">
								<X>-223.500015</X>
								<Y>153.899994</Y>
								<Z>10.500001</Z>
								<R00>-2.08713323e-015</R00>
								<R01>7.10542736e-015</R01>
								<R02>-1</R02>
								<R10>0</R10>
								<R11>1</R11>
								<R12>-7.10542736e-015</R12>
								<R20>1</R20>
								<R21>0</R21>
								<R22>2.08713323e-015</R22>
							</CoordinateFrame>
							<bool name="CanCollide">false</bool>
							<bool name="DraggingV1">false</bool>
							<float name="Elasticity">0.200000003</float>
							<token name="FormFactor">1</token>
							<float name="Friction">0.200000003</float>
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
							<string name="Name">Front_Center_top</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>2.10786541e-010</X>
								<Y>2.43004861e-009</Y>
								<Z>-5.32704922e-011</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">0</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>-1.79773835e-007</X>
								<Y>0.0122267175</Y>
								<Z>2.69640236e-006</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>1.20000005</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX10">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><null></null></Content>
								<token name="MeshType">3</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.100000001</X>
									<Y>0.5</Y>
									<Z>0.100000001</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="Part" referent="RBX11">
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
							<int name="BrickColor">199</int>
							<CoordinateFrame name="CFrame">
								<X>-223.500015</X>
								<Y>154.899994</Y>
								<Z>10.500001</Z>
								<R00>-2.08713323e-015</R00>
								<R01>7.10542736e-015</R01>
								<R02>-1</R02>
								<R10>0</R10>
								<R11>1</R11>
								<R12>-7.10542736e-015</R12>
								<R20>1</R20>
								<R21>0</R21>
								<R22>2.08713323e-015</R22>
							</CoordinateFrame>
							<bool name="CanCollide">false</bool>
							<bool name="DraggingV1">false</bool>
							<float name="Elasticity">0.200000003</float>
							<token name="FormFactor">1</token>
							<float name="Friction">0.200000003</float>
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
							<string name="Name">Front_Center_Bottom</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>2.10786541e-010</X>
								<Y>2.43004861e-009</Y>
								<Z>-5.32704922e-011</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">0</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>-1.79720573e-007</X>
								<Y>0.0122267175</Y>
								<Z>2.69661336e-006</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>1.20000005</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX12">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><null></null></Content>
								<token name="MeshType">3</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.100000001</X>
									<Y>0.5</Y>
									<Z>0.100000001</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="Part" referent="RBX13">
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
							<int name="BrickColor">199</int>
							<CoordinateFrame name="CFrame">
								<X>-223.500015</X>
								<Y>154.399994</Y>
								<Z>11.000001</Z>
								<R00>-2.08713323e-015</R00>
								<R01>7.10542736e-015</R01>
								<R02>-1</R02>
								<R10>0</R10>
								<R11>1</R11>
								<R12>-7.10542736e-015</R12>
								<R20>1</R20>
								<R21>0</R21>
								<R22>2.08713323e-015</R22>
							</CoordinateFrame>
							<bool name="CanCollide">false</bool>
							<bool name="DraggingV1">false</bool>
							<float name="Elasticity">0.200000003</float>
							<token name="FormFactor">1</token>
							<float name="Friction">0.200000003</float>
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
							<string name="Name">Front_Center_Left</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>2.10786541e-010</X>
								<Y>2.43004861e-009</Y>
								<Z>-5.32704922e-011</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">0</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>-1.78532176e-007</X>
								<Y>0.0122267175</Y>
								<Z>2.69650786e-006</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>1.20000005</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX14">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><null></null></Content>
								<token name="MeshType">3</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.5</X>
									<Y>0.100000001</Y>
									<Z>0.100000001</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="Part" referent="RBX15">
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
							<int name="BrickColor">199</int>
							<CoordinateFrame name="CFrame">
								<X>-223.500015</X>
								<Y>154.399994</Y>
								<Z>10.000001</Z>
								<R00>-2.08713323e-015</R00>
								<R01>7.10542736e-015</R01>
								<R02>-1</R02>
								<R10>0</R10>
								<R11>1</R11>
								<R12>-7.10542736e-015</R12>
								<R20>1</R20>
								<R21>0</R21>
								<R22>2.08713323e-015</R22>
							</CoordinateFrame>
							<bool name="CanCollide">false</bool>
							<bool name="DraggingV1">false</bool>
							<float name="Elasticity">0.200000003</float>
							<token name="FormFactor">1</token>
							<float name="Friction">0.200000003</float>
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
							<string name="Name">Front_Center_Right</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>2.10786541e-010</X>
								<Y>2.43004861e-009</Y>
								<Z>-5.32704922e-011</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">0</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>-1.80962232e-007</X>
								<Y>0.0122267175</Y>
								<Z>2.69650786e-006</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>1.20000005</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX16">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><null></null></Content>
								<token name="MeshType">3</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.5</X>
									<Y>0.100000001</Y>
									<Z>0.100000001</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="Part" referent="RBX17">
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
							<int name="BrickColor">24</int>
							<CoordinateFrame name="CFrame">
								<X>-223.500015</X>
								<Y>155.970001</Y>
								<Z>10.6000013</Z>
								<R00>-2.50944734e-015</R00>
								<R01>6.96748847e-015</R01>
								<R02>-1</R02>
								<R10>-0.0599640049</R10>
								<R11>0.998200536</R11>
								<R12>-7.10542736e-015</R12>
								<R20>0.998200536</R20>
								<R21>0.0599640049</R21>
								<R22>2.08713323e-015</R22>
							</CoordinateFrame>
							<bool name="CanCollide">false</bool>
							<bool name="DraggingV1">false</bool>
							<float name="Elasticity">0.200000003</float>
							<token name="FormFactor">1</token>
							<float name="Friction">0.200000003</float>
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
							<string name="Name">TOP</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>2.10786541e-010</X>
								<Y>2.43004861e-009</Y>
								<Z>-5.32704922e-011</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">0</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>-1.79420567e-007</X>
								<Y>0.0122267175</Y>
								<Z>2.69683869e-006</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>1.20000005</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="BlockMesh" referent="RBX18">
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
									<Y>0.100000001</Y>
									<Z>0.800000012</Z>
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
					<Item class="Part" referent="RBX19">
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
							<int name="BrickColor">24</int>
							<CoordinateFrame name="CFrame">
								<X>-223.500015</X>
								<Y>155.849991</Y>
								<Z>9.75000095</Z>
								<R00>8.44606621e-016</R00>
								<R01>7.35729938e-015</R01>
								<R02>-1</R02>
								<R10>0.389418334</R10>
								<R11>0.921060979</R11>
								<R12>-7.10542736e-015</R12>
								<R20>0.921060979</R20>
								<R21>-0.389418334</R21>
								<R22>2.08713323e-015</R22>
							</CoordinateFrame>
							<bool name="CanCollide">false</bool>
							<bool name="DraggingV1">false</bool>
							<float name="Elasticity">0.200000003</float>
							<token name="FormFactor">1</token>
							<float name="Friction">0.200000003</float>
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
							<string name="Name">TOP1</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>2.10786541e-010</X>
								<Y>2.43004861e-009</Y>
								<Z>-5.32704922e-011</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">0</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>-1.81492496e-007</X>
								<Y>0.0122267175</Y>
								<Z>2.69681345e-006</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>1.20000005</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="BlockMesh" referent="RBX20">
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
									<X>0.800000012</X>
									<Y>0.100000001</Y>
									<Z>0.800000012</Z>
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
					<Item class="Part" referent="RBX21">
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
							<int name="BrickColor">24</int>
							<CoordinateFrame name="CFrame">
								<X>-223.500015</X>
								<Y>155.799988</Y>
								<Z>11.250001</Z>
								<R00>-5.23815508e-015</R00>
								<R01>5.23497405e-015</R01>
								<R02>-1</R02>
								<R10>-0.47942555</R10>
								<R11>0.87758255</R11>
								<R12>-7.10542736e-015</R12>
								<R20>0.87758255</R20>
								<R21>0.47942555</R21>
								<R22>2.08713323e-015</R22>
							</CoordinateFrame>
							<bool name="CanCollide">false</bool>
							<bool name="DraggingV1">false</bool>
							<float name="Elasticity">0.200000003</float>
							<token name="FormFactor">1</token>
							<float name="Friction">0.200000003</float>
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
							<string name="Name">TOP2</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>2.10786541e-010</X>
								<Y>2.43004861e-009</Y>
								<Z>-5.32704922e-011</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">0</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>-1.77850083e-007</X>
								<Y>0.0122267175</Y>
								<Z>2.69680299e-006</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>1.20000005</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="BlockMesh" referent="RBX22">
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
									<X>0.600000024</X>
									<Y>0.100000001</Y>
									<Z>0.800000012</Z>
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
					<Item class="Part" referent="RBX23">
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
							<int name="BrickColor">199</int>
							<CoordinateFrame name="CFrame">
								<X>-223.500015</X>
								<Y>154.75</Y>
								<Z>10.8500013</Z>
								<R00>-6.48087185e-015</R00>
								<R01>3.58350671e-015</R01>
								<R02>-1</R02>
								<R10>-0.703279376</R10>
								<R11>0.710913539</R11>
								<R12>-7.10542736e-015</R12>
								<R20>0.710913539</R20>
								<R21>0.703279376</R21>
								<R22>2.08713323e-015</R22>
							</CoordinateFrame>
							<bool name="CanCollide">false</bool>
							<bool name="DraggingV1">false</bool>
							<float name="Elasticity">0.200000003</float>
							<token name="FormFactor">1</token>
							<float name="Friction">0.200000003</float>
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
							<string name="Name">Front_Center_BL</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>2.10786541e-010</X>
								<Y>2.43004861e-009</Y>
								<Z>-5.32704922e-011</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">0</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>-1.78878039e-007</X>
								<Y>0.0122267175</Y>
								<Z>2.69658153e-006</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>1.20000005</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX24">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><null></null></Content>
								<token name="MeshType">3</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.100000001</X>
									<Y>0.5</Y>
									<Z>0.100000001</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="Part" referent="RBX25">
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
							<int name="BrickColor">199</int>
							<CoordinateFrame name="CFrame">
								<X>-223.500015</X>
								<Y>154.75</Y>
								<Z>10.1500006</Z>
								<R00>3.51332919e-015</R00>
								<R01>6.5191823e-015</R01>
								<R02>-1</R02>
								<R10>0.703279376</R10>
								<R11>0.710913539</R11>
								<R12>-7.10542736e-015</R12>
								<R20>0.710913539</R20>
								<R21>-0.703279376</R21>
								<R22>2.08713323e-015</R22>
							</CoordinateFrame>
							<bool name="CanCollide">false</bool>
							<bool name="DraggingV1">false</bool>
							<float name="Elasticity">0.200000003</float>
							<token name="FormFactor">1</token>
							<float name="Friction">0.200000003</float>
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
							<string name="Name">Front_Center_BR</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>2.10786541e-010</X>
								<Y>2.43004861e-009</Y>
								<Z>-5.32704922e-011</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">0</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>-1.80579079e-007</X>
								<Y>0.0122267175</Y>
								<Z>2.69658153e-006</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>1.20000005</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX26">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><null></null></Content>
								<token name="MeshType">3</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.100000001</X>
									<Y>0.5</Y>
									<Z>0.100000001</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="Part" referent="RBX27">
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
							<int name="BrickColor">199</int>
							<CoordinateFrame name="CFrame">
								<X>-223.500015</X>
								<Y>154.049988</Y>
								<Z>10.8500013</Z>
								<R00>3.51332919e-015</R00>
								<R01>6.5191823e-015</R01>
								<R02>-1</R02>
								<R10>0.703279376</R10>
								<R11>0.710913539</R11>
								<R12>-7.10542736e-015</R12>
								<R20>0.710913539</R20>
								<R21>-0.703279376</R21>
								<R22>2.08713323e-015</R22>
							</CoordinateFrame>
							<bool name="CanCollide">false</bool>
							<bool name="DraggingV1">false</bool>
							<float name="Elasticity">0.200000003</float>
							<token name="FormFactor">1</token>
							<float name="Friction">0.200000003</float>
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
							<string name="Name">Front_Center_FR</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>2.10786541e-010</X>
								<Y>2.43004861e-009</Y>
								<Z>-5.32704922e-011</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">0</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>-1.78915329e-007</X>
								<Y>0.0122267175</Y>
								<Z>2.69643419e-006</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>1.20000005</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX28">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><null></null></Content>
								<token name="MeshType">3</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.100000001</X>
									<Y>0.5</Y>
									<Z>0.100000001</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="Part" referent="RBX29">
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
							<int name="BrickColor">199</int>
							<CoordinateFrame name="CFrame">
								<X>-223.500015</X>
								<Y>154.049988</Y>
								<Z>10.1500006</Z>
								<R00>-6.48087185e-015</R00>
								<R01>3.58350671e-015</R01>
								<R02>-1</R02>
								<R10>-0.703279376</R10>
								<R11>0.710913539</R11>
								<R12>-7.10542736e-015</R12>
								<R20>0.710913539</R20>
								<R21>0.703279376</R21>
								<R22>2.08713323e-015</R22>
							</CoordinateFrame>
							<bool name="CanCollide">false</bool>
							<bool name="DraggingV1">false</bool>
							<float name="Elasticity">0.200000003</float>
							<token name="FormFactor">1</token>
							<float name="Friction">0.200000003</float>
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
							<string name="Name">Front_Center_FL</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>2.10786541e-010</X>
								<Y>2.43004861e-009</Y>
								<Z>-5.32704922e-011</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">0</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>-1.80616368e-007</X>
								<Y>0.0122267175</Y>
								<Z>2.69643419e-006</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>1.20000005</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX30">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><null></null></Content>
								<token name="MeshType">3</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.100000001</X>
									<Y>0.5</Y>
									<Z>0.100000001</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
				</Item>
				<Item class="Part" referent="RBX31">
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
						<int name="BrickColor">199</int>
						<CoordinateFrame name="CFrame">
							<X>-223.100021</X>
							<Y>155.599991</Y>
							<Z>10.9000006</Z>
							<R00>-4.27698064e-015</R00>
							<R01>6.04571418e-015</R01>
							<R02>-1</R02>
							<R10>-0.324043036</R10>
							<R11>0.946042359</R11>
							<R12>-7.10542736e-015</R12>
							<R20>0.946042359</R20>
							<R21>0.324043036</R21>
							<R22>2.08713323e-015</R22>
						</CoordinateFrame>
						<bool name="CanCollide">false</bool>
						<bool name="DraggingV1">false</bool>
						<float name="Elasticity">0.200000003</float>
						<token name="FormFactor">1</token>
						<float name="Friction">0.200000003</float>
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
						<string name="Name">Left_Bar</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>2.10786541e-010</X>
							<Y>2.43004861e-009</Y>
							<Z>-5.32704922e-011</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>-1.78711261e-007</X>
							<Y>0.0122267175</Y>
							<Z>2.69578891e-006</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">1</token>
						<Vector3 name="size">
							<X>1</X>
							<Y>2.4000001</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
					<Item class="CylinderMesh" referent="RBX32">
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
								<X>0.300000012</X>
								<Y>1</Y>
								<Z>0.300000012</Z>
							</Vector3>
							<Vector3 name="VertexColor">
								<X>1</X>
								<Y>1</Y>
								<Z>1</Z>
							</Vector3>
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
								<Y>-1</Y>
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
							<string name="Name">Weld</string>
							<Ref name="Part0">RBX31</Ref>
							<Ref name="Part1">RBX34</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
				<Item class="Part" referent="RBX35">
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
						<int name="BrickColor">199</int>
						<CoordinateFrame name="CFrame">
							<X>-223.900009</X>
							<Y>155.599991</Y>
							<Z>10.9000006</Z>
							<R00>-4.27698064e-015</R00>
							<R01>6.04571418e-015</R01>
							<R02>-1</R02>
							<R10>-0.324043036</R10>
							<R11>0.946042359</R11>
							<R12>-7.10542736e-015</R12>
							<R20>0.946042359</R20>
							<R21>0.324043036</R21>
							<R22>2.08713323e-015</R22>
						</CoordinateFrame>
						<bool name="CanCollide">false</bool>
						<bool name="DraggingV1">false</bool>
						<float name="Elasticity">0.200000003</float>
						<token name="FormFactor">1</token>
						<float name="Friction">0.200000003</float>
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
						<string name="Name">Right_Bar</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>2.10786541e-010</X>
							<Y>2.43004861e-009</Y>
							<Z>-5.32704922e-011</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>-1.78711261e-007</X>
							<Y>0.0122267175</Y>
							<Z>2.69773273e-006</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">1</token>
						<Vector3 name="size">
							<X>1</X>
							<Y>2.4000001</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
					<Item class="CylinderMesh" referent="RBX36">
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
								<X>0.300000012</X>
								<Y>1</Y>
								<Z>0.300000012</Z>
							</Vector3>
							<Vector3 name="VertexColor">
								<X>1</X>
								<Y>1</Y>
								<Z>1</Z>
							</Vector3>
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
								<Y>-1</Y>
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
							<string name="Name">Weld</string>
							<Ref name="Part0">RBX35</Ref>
							<Ref name="Part1">RBX38</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
				<Item class="Part" referent="RBX38">
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
						<int name="BrickColor">24</int>
						<CoordinateFrame name="CFrame">
							<X>-223.900009</X>
							<Y>156.546036</Y>
							<Z>11.2240438</Z>
							<R00>-4.27698064e-015</R00>
							<R01>6.04571418e-015</R01>
							<R02>-1</R02>
							<R10>-0.324043036</R10>
							<R11>0.946042359</R11>
							<R12>-7.10542736e-015</R12>
							<R20>0.946042359</R20>
							<R21>0.324043036</R21>
							<R22>2.08713323e-015</R22>
						</CoordinateFrame>
						<bool name="CanCollide">false</bool>
						<bool name="DraggingV1">false</bool>
						<float name="Elasticity">0.200000003</float>
						<token name="FormFactor">1</token>
						<float name="Friction">0.200000003</float>
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
						<string name="Name">Right_Bar2</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>2.10786541e-010</X>
							<Y>2.43004861e-009</Y>
							<Z>-5.32704922e-011</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>-1.77873417e-007</X>
							<Y>0.0122267175</Y>
							<Z>2.69793213e-006</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">1</token>
						<Vector3 name="size">
							<X>1</X>
							<Y>1.60000002</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
					<Item class="CylinderMesh" referent="RBX39">
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
								<X>0.449999988</X>
								<Y>0.800000012</Y>
								<Z>0.449999988</Z>
							</Vector3>
							<Vector3 name="VertexColor">
								<X>1</X>
								<Y>1</Y>
								<Z>1</Z>
							</Vector3>
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
								<X>-0.0739950091</X>
								<Y>-0.356316686</Y>
								<Z>0.489962399</Z>
								<R00>-0.702397048</R00>
								<R01>0.711785316</R01>
								<R02>0</R02>
								<R10>0.00913386047</R10>
								<R11>0.00901338737</R11>
								<R12>-0.999917686</R12>
								<R20>-0.711726725</R20>
								<R21>-0.702339232</R21>
								<R22>-0.012832325</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">RBX38</Ref>
							<Ref name="Part1">RBX41</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
				<Item class="Part" referent="RBX34">
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
						<int name="BrickColor">24</int>
						<CoordinateFrame name="CFrame">
							<X>-223.100021</X>
							<Y>156.546036</Y>
							<Z>11.2240438</Z>
							<R00>-4.27698064e-015</R00>
							<R01>6.04571418e-015</R01>
							<R02>-1</R02>
							<R10>-0.324043036</R10>
							<R11>0.946042359</R11>
							<R12>-7.10542736e-015</R12>
							<R20>0.946042359</R20>
							<R21>0.324043036</R21>
							<R22>2.08713323e-015</R22>
						</CoordinateFrame>
						<bool name="CanCollide">false</bool>
						<bool name="DraggingV1">false</bool>
						<float name="Elasticity">0.200000003</float>
						<token name="FormFactor">1</token>
						<float name="Friction">0.200000003</float>
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
						<string name="Name">Left_Bar2</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>2.10786541e-010</X>
							<Y>2.43004861e-009</Y>
							<Z>-5.32704922e-011</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>-1.77873417e-007</X>
							<Y>0.0122267175</Y>
							<Z>2.69598831e-006</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">1</token>
						<Vector3 name="size">
							<X>1</X>
							<Y>1.60000002</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
					<Item class="CylinderMesh" referent="RBX42">
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
								<X>0.449999988</X>
								<Y>0.800000012</Y>
								<Z>0.449999988</Z>
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
				<Item class="Part" referent="RBX43">
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
						<int name="BrickColor">1</int>
						<CoordinateFrame name="CFrame">
							<X>-223.500015</X>
							<Y>157</Y>
							<Z>11.0500011</Z>
							<R00>-2.08713323e-015</R00>
							<R01>7.10542736e-015</R01>
							<R02>-1</R02>
							<R10>0</R10>
							<R11>1</R11>
							<R12>-7.10542736e-015</R12>
							<R20>1</R20>
							<R21>0</R21>
							<R22>2.08713323e-015</R22>
						</CoordinateFrame>
						<bool name="CanCollide">false</bool>
						<bool name="DraggingV1">false</bool>
						<float name="Elasticity">0.200000003</float>
						<token name="FormFactor">1</token>
						<float name="Friction">0.200000003</float>
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
						<string name="Name">Sign</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>2.10786541e-010</X>
							<Y>2.43004861e-009</Y>
							<Z>-5.32704922e-011</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>-1.78272174e-007</X>
							<Y>0.0122267175</Y>
							<Z>2.69705583e-006</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">1</token>
						<Vector3 name="size">
							<X>1</X>
							<Y>1.20000005</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
					<Item class="BlockMesh" referent="RBX44">
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
								<X>0.100000001</X>
								<Y>0.600000024</Y>
								<Z>0.800000012</Z>
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
				<Item class="Part" referent="RBX45">
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
						<int name="BrickColor">199</int>
						<CoordinateFrame name="CFrame">
							<X>-223.500015</X>
							<Y>155.399994</Y>
							<Z>12.000001</Z>
							<R00>-2.08713323e-015</R00>
							<R01>7.10542736e-015</R01>
							<R02>-1</R02>
							<R10>0</R10>
							<R11>1</R11>
							<R12>-7.10542736e-015</R12>
							<R20>1</R20>
							<R21>0</R21>
							<R22>2.08713323e-015</R22>
						</CoordinateFrame>
						<bool name="CanCollide">false</bool>
						<bool name="DraggingV1">false</bool>
						<float name="Elasticity">0.200000003</float>
						<token name="FormFactor">1</token>
						<float name="Friction">0.200000003</float>
						<float name="FrontParamA">-0.5</float>
						<float name="FrontParamB">0.5</float>
						<token name="FrontSurface">0</token>
						<token name="FrontSurfaceInput">0</token>
						<float name="LeftParamA">-0.5</float>
						<float name="LeftParamB">0.5</float>
						<token name="LeftSurface">2</token>
						<token name="LeftSurfaceInput">0</token>
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Frnt_Bdy</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">2</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>2.10786541e-010</X>
							<Y>2.43004861e-009</Y>
							<Z>-5.32704922e-011</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>-1.76048857e-007</X>
							<Y>0.0122267175</Y>
							<Z>2.69671864e-006</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">1</token>
						<Vector3 name="size">
							<X>1</X>
							<Y>0.800000012</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
					<Item class="BlockMesh" referent="RBX46">
						<Properties>
							<float name="Bevel">0</float>
							<float name="Bevel Roundness">0</float>
							<float name="Bulge">0</float>
							<token name="LODX">2</token>
							<token name="LODY">2</token>
							<string name="Name">Mesh</string>
							<Vector3 name="Offset">
								<X>0</X>
								<Y>0.200000003</Y>
								<Z>0</Z>
							</Vector3>
							<Vector3 name="Scale">
								<X>1</X>
								<Y>1</Y>
								<Z>0.800000012</Z>
							</Vector3>
							<Vector3 name="VertexColor">
								<X>1</X>
								<Y>1</Y>
								<Z>1</Z>
							</Vector3>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX47">
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
								<Y>-0.5</Y>
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
							<string name="Name">Weld</string>
							<Ref name="Part0">RBX45</Ref>
							<Ref name="Part1">RBX48</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX49">
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
								<X>1.5</X>
								<Y>1</Y>
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
							<string name="Name">Weld</string>
							<Ref name="Part0">RBX45</Ref>
							<Ref name="Part1">RBX50</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX51">
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
								<X>-0.000725125545</X>
								<Y>-0.449851811</Y>
								<Z>-0.0115253525</Z>
								<R00>0.0627708584</R00>
								<R01>-0.00161139015</R01>
								<R02>0.998026669</R02>
								<R10>-0.0256625377</R10>
								<R11>-0.999670684</R11>
								<R12>0</R12>
								<R20>0.997698009</R20>
								<R21>-0.0256118961</R21>
								<R22>-0.0627915338</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">RBX45</Ref>
							<Ref name="Part1">RBX52</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
				<Item class="Part" referent="RBX48">
					<Properties>
						<bool name="Anchored">false</bool>
						<float name="BackParamA">-0.5</float>
						<float name="BackParamB">0.5</float>
						<token name="BackSurface">0</token>
						<token name="BackSurfaceInput">0</token>
						<float name="BottomParamA">-0.5</float>
						<float name="BottomParamB">0.5</float>
						<token name="BottomSurface">2</token>
						<token name="BottomSurfaceInput">0</token>
						<int name="BrickColor">24</int>
						<CoordinateFrame name="CFrame">
							<X>-223.500015</X>
							<Y>155.899994</Y>
							<Z>12.000001</Z>
							<R00>-2.08713323e-015</R00>
							<R01>7.10542736e-015</R01>
							<R02>-1</R02>
							<R10>0</R10>
							<R11>1</R11>
							<R12>-7.10542736e-015</R12>
							<R20>1</R20>
							<R21>0</R21>
							<R22>2.08713323e-015</R22>
						</CoordinateFrame>
						<bool name="CanCollide">false</bool>
						<bool name="DraggingV1">false</bool>
						<float name="Elasticity">0.200000003</float>
						<token name="FormFactor">1</token>
						<float name="Friction">0.200000003</float>
						<float name="FrontParamA">-0.5</float>
						<float name="FrontParamB">0.5</float>
						<token name="FrontSurface">0</token>
						<token name="FrontSurfaceInput">0</token>
						<float name="LeftParamA">-0.5</float>
						<float name="LeftParamB">0.5</float>
						<token name="LeftSurface">2</token>
						<token name="LeftSurfaceInput">0</token>
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Frnt_Bdy1</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">2</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>2.10786541e-010</X>
							<Y>2.43004861e-009</Y>
							<Z>-5.32704922e-011</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>-1.76022226e-007</X>
							<Y>0.0122267175</Y>
							<Z>2.69682414e-006</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">1</token>
						<Vector3 name="size">
							<X>1</X>
							<Y>0.400000006</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
					<Item class="BlockMesh" referent="RBX53">
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
								<X>1.10000002</X>
								<Y>1</Y>
								<Z>0.899999976</Z>
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
				<Item class="Part" referent="RBX54">
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
						<int name="BrickColor">199</int>
						<CoordinateFrame name="CFrame">
							<X>-223.500015</X>
							<Y>154.899994</Y>
							<Z>13.000001</Z>
							<R00>-2.08713323e-015</R00>
							<R01>7.10542736e-015</R01>
							<R02>-1</R02>
							<R10>0</R10>
							<R11>1</R11>
							<R12>-7.10542736e-015</R12>
							<R20>1</R20>
							<R21>0</R21>
							<R22>2.08713323e-015</R22>
						</CoordinateFrame>
						<bool name="CanCollide">true</bool>
						<bool name="DraggingV1">false</bool>
						<float name="Elasticity">0.200000003</float>
						<token name="FormFactor">1</token>
						<float name="Friction">0.200000003</float>
						<float name="FrontParamA">-0.5</float>
						<float name="FrontParamB">0.5</float>
						<token name="FrontSurface">2</token>
						<token name="FrontSurfaceInput">0</token>
						<float name="LeftParamA">-0.5</float>
						<float name="LeftParamB">0.5</float>
						<token name="LeftSurface">2</token>
						<token name="LeftSurfaceInput">0</token>
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Frnt_Bdy0</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">2</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>2.10786541e-010</X>
							<Y>2.43004861e-009</Y>
							<Z>-5.32704922e-011</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>-1.73645446e-007</X>
							<Y>0.0122267175</Y>
							<Z>2.69661314e-006</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">1</token>
						<Vector3 name="size">
							<X>1</X>
							<Y>0.800000012</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
					<Item class="BlockMesh" referent="RBX55">
						<Properties>
							<float name="Bevel">0</float>
							<float name="Bevel Roundness">0</float>
							<float name="Bulge">0</float>
							<token name="LODX">2</token>
							<token name="LODY">2</token>
							<string name="Name">Mesh</string>
							<Vector3 name="Offset">
								<X>0</X>
								<Y>0.200000003</Y>
								<Z>0</Z>
							</Vector3>
							<Vector3 name="Scale">
								<X>1</X>
								<Y>1</Y>
								<Z>0.800000012</Z>
							</Vector3>
							<Vector3 name="VertexColor">
								<X>1</X>
								<Y>1</Y>
								<Z>1</Z>
							</Vector3>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX56">
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
								<X>-1.5</X>
								<Y>0.5</Y>
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
							<string name="Name">Weld</string>
							<Ref name="Part0">RBX54</Ref>
							<Ref name="Part1">RBX57</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX58">
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
								<X>0.510699451</X>
								<Y>-0.993641078</Y>
								<Z>-0.0431676358</Z>
								<R00>-0.0153957615</R00>
								<R01>-0.135867715</R01>
								<R02>0.990607381</R02>
								<R10>0.993641078</R10>
								<R11>-0.112593792</R11>
								<R12>0</R12>
								<R20>0.111536242</R20>
								<R21>0.984308183</R21>
								<R22>0.136737213</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">RBX54</Ref>
							<Ref name="Part1">RBX59</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX60">
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
								<X>1</X>
								<Y>-0.5</Y>
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
							<string name="Name">Weld</string>
							<Ref name="Part0">RBX54</Ref>
							<Ref name="Part1">RBX45</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX61">
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
								<Y>-0.5</Y>
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
							<string name="Name">Weld</string>
							<Ref name="Part0">RBX54</Ref>
							<Ref name="Part1">RBX62</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
				<Item class="Part" referent="RBX62">
					<Properties>
						<bool name="Anchored">false</bool>
						<float name="BackParamA">-0.5</float>
						<float name="BackParamB">0.5</float>
						<token name="BackSurface">0</token>
						<token name="BackSurfaceInput">0</token>
						<float name="BottomParamA">-0.5</float>
						<float name="BottomParamB">0.5</float>
						<token name="BottomSurface">2</token>
						<token name="BottomSurfaceInput">0</token>
						<int name="BrickColor">24</int>
						<CoordinateFrame name="CFrame">
							<X>-223.500015</X>
							<Y>155.399994</Y>
							<Z>13.000001</Z>
							<R00>-2.08713323e-015</R00>
							<R01>7.10542736e-015</R01>
							<R02>-1</R02>
							<R10>0</R10>
							<R11>1</R11>
							<R12>-7.10542736e-015</R12>
							<R20>1</R20>
							<R21>0</R21>
							<R22>2.08713323e-015</R22>
						</CoordinateFrame>
						<bool name="CanCollide">false</bool>
						<bool name="DraggingV1">false</bool>
						<float name="Elasticity">0.200000003</float>
						<token name="FormFactor">1</token>
						<float name="Friction">0.200000003</float>
						<float name="FrontParamA">-0.5</float>
						<float name="FrontParamB">0.5</float>
						<token name="FrontSurface">2</token>
						<token name="FrontSurfaceInput">0</token>
						<float name="LeftParamA">-0.5</float>
						<float name="LeftParamB">0.5</float>
						<token name="LeftSurface">2</token>
						<token name="LeftSurfaceInput">0</token>
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Frnt_Bdy2</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">2</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>2.10786541e-010</X>
							<Y>2.43004861e-009</Y>
							<Z>-5.32704922e-011</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>-1.73618815e-007</X>
							<Y>0.0122267175</Y>
							<Z>2.69671864e-006</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">1</token>
						<Vector3 name="size">
							<X>1</X>
							<Y>0.400000006</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
					<Item class="BlockMesh" referent="RBX63">
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
								<X>1.10000002</X>
								<Y>1</Y>
								<Z>0.899999976</Z>
							</Vector3>
							<Vector3 name="VertexColor">
								<X>1</X>
								<Y>1</Y>
								<Z>1</Z>
							</Vector3>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX64">
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
								<X>-1.01841557</X>
								<Y>0.159153089</Y>
								<Z>0</Z>
								<R00>0.921060979</R00>
								<R01>0.389418334</R01>
								<R02>0</R02>
								<R10>-0.389418334</R10>
								<R11>0.921060979</R11>
								<R12>0</R12>
								<R20>0</R20>
								<R21>0</R21>
								<R22>1</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">RBX62</Ref>
							<Ref name="Part1">RBX65</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
				<Item class="Model" referent="RBX66">
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
						<string name="Name">Backwhl</string>
						<Ref name="PrimaryPart">null</Ref>
						<bool name="archivable">true</bool>
					</Properties>
					<Item class="Part" referent="RBX67">
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
							<int name="BrickColor">199</int>
							<CoordinateFrame name="CFrame">
								<X>-223.500015</X>
								<Y>154.399994</Y>
								<Z>14.500001</Z>
								<R00>-2.08713323e-015</R00>
								<R01>7.10542736e-015</R01>
								<R02>-1</R02>
								<R10>0</R10>
								<R11>1</R11>
								<R12>-7.10542736e-015</R12>
								<R20>1</R20>
								<R21>0</R21>
								<R22>2.08713323e-015</R22>
							</CoordinateFrame>
							<bool name="CanCollide">true</bool>
							<bool name="DraggingV1">false</bool>
							<float name="Elasticity">0.200000003</float>
							<token name="FormFactor">1</token>
							<float name="Friction">0.200000003</float>
							<float name="FrontParamA">-0.5</float>
							<float name="FrontParamB">0.5</float>
							<token name="FrontSurface">0</token>
							<token name="FrontSurfaceInput">0</token>
							<float name="LeftParamA">-0.5</float>
							<float name="LeftParamB">0.5</float>
							<token name="LeftSurface">3</token>
							<token name="LeftSurfaceInput">0</token>
							<bool name="Locked">false</bool>
							<token name="Material">256</token>
							<string name="Name">FrontWheel_i1</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">4</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>2.10786541e-010</X>
								<Y>2.43004861e-009</Y>
								<Z>-5.32704922e-011</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">0</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>-1.70027008e-007</X>
								<Y>0.0122267175</Y>
								<Z>2.69650764e-006</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>1.20000005</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX68">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><url>http://www.emeraldolds.glados.pro/asset?id=3270017</url></Content>
								<token name="MeshType">5</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>1.60000002</X>
									<Y>1.60000002</Y>
									<Z>2.5999999</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="Part" referent="RBX69">
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
							<int name="BrickColor">199</int>
							<CoordinateFrame name="CFrame">
								<X>-223.500015</X>
								<Y>154.399994</Y>
								<Z>14.500001</Z>
								<R00>-2.08713323e-015</R00>
								<R01>7.10542736e-015</R01>
								<R02>-1</R02>
								<R10>0</R10>
								<R11>1</R11>
								<R12>-7.10542736e-015</R12>
								<R20>1</R20>
								<R21>0</R21>
								<R22>2.08713323e-015</R22>
							</CoordinateFrame>
							<bool name="CanCollide">true</bool>
							<bool name="DraggingV1">false</bool>
							<float name="Elasticity">0.200000003</float>
							<token name="FormFactor">1</token>
							<float name="Friction">0.200000003</float>
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
							<string name="Name">Front_Center</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>2.10786541e-010</X>
								<Y>2.43004861e-009</Y>
								<Z>-5.32704922e-011</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">0</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>-1.70027008e-007</X>
								<Y>0.0122267175</Y>
								<Z>2.69650764e-006</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>1.20000005</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX70">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><null></null></Content>
								<token name="MeshType">3</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.600000024</X>
									<Y>0.5</Y>
									<Z>0.200000003</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="Part" referent="RBX71">
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
							<int name="BrickColor">199</int>
							<CoordinateFrame name="CFrame">
								<X>-223.500015</X>
								<Y>153.899994</Y>
								<Z>14.500001</Z>
								<R00>-2.08713323e-015</R00>
								<R01>7.10542736e-015</R01>
								<R02>-1</R02>
								<R10>0</R10>
								<R11>1</R11>
								<R12>-7.10542736e-015</R12>
								<R20>1</R20>
								<R21>0</R21>
								<R22>2.08713323e-015</R22>
							</CoordinateFrame>
							<bool name="CanCollide">false</bool>
							<bool name="DraggingV1">false</bool>
							<float name="Elasticity">0.200000003</float>
							<token name="FormFactor">1</token>
							<float name="Friction">0.200000003</float>
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
							<string name="Name">Front_Center_top</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>2.10786541e-010</X>
								<Y>2.43004861e-009</Y>
								<Z>-5.32704922e-011</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">0</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>-1.70053639e-007</X>
								<Y>0.0122267175</Y>
								<Z>2.69640213e-006</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>1.20000005</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX72">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><null></null></Content>
								<token name="MeshType">3</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.100000001</X>
									<Y>0.5</Y>
									<Z>0.100000001</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="Part" referent="RBX73">
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
							<int name="BrickColor">199</int>
							<CoordinateFrame name="CFrame">
								<X>-223.500015</X>
								<Y>154.899994</Y>
								<Z>14.500001</Z>
								<R00>-2.08713323e-015</R00>
								<R01>7.10542736e-015</R01>
								<R02>-1</R02>
								<R10>0</R10>
								<R11>1</R11>
								<R12>-7.10542736e-015</R12>
								<R20>1</R20>
								<R21>0</R21>
								<R22>2.08713323e-015</R22>
							</CoordinateFrame>
							<bool name="CanCollide">false</bool>
							<bool name="DraggingV1">false</bool>
							<float name="Elasticity">0.200000003</float>
							<token name="FormFactor">1</token>
							<float name="Friction">0.200000003</float>
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
							<string name="Name">Frpmt_Center_Bottom</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>2.10786541e-010</X>
								<Y>2.43004861e-009</Y>
								<Z>-5.32704922e-011</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">0</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>-1.70000376e-007</X>
								<Y>0.0122267175</Y>
								<Z>2.69661314e-006</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>1.20000005</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX74">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><null></null></Content>
								<token name="MeshType">3</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.100000001</X>
									<Y>0.5</Y>
									<Z>0.100000001</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="Part" referent="RBX75">
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
							<int name="BrickColor">199</int>
							<CoordinateFrame name="CFrame">
								<X>-223.500015</X>
								<Y>154.399994</Y>
								<Z>15.000001</Z>
								<R00>-2.08713323e-015</R00>
								<R01>7.10542736e-015</R01>
								<R02>-1</R02>
								<R10>0</R10>
								<R11>1</R11>
								<R12>-7.10542736e-015</R12>
								<R20>1</R20>
								<R21>0</R21>
								<R22>2.08713323e-015</R22>
							</CoordinateFrame>
							<bool name="CanCollide">false</bool>
							<bool name="DraggingV1">false</bool>
							<float name="Elasticity">0.200000003</float>
							<token name="FormFactor">1</token>
							<float name="Friction">0.200000003</float>
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
							<string name="Name">Front_Center_Left</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>2.10786541e-010</X>
								<Y>2.43004861e-009</Y>
								<Z>-5.32704922e-011</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">0</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>-1.6881198e-007</X>
								<Y>0.0122267175</Y>
								<Z>2.69650764e-006</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>1.20000005</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX76">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><null></null></Content>
								<token name="MeshType">3</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.5</X>
									<Y>0.100000001</Y>
									<Z>0.100000001</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="Part" referent="RBX77">
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
							<int name="BrickColor">199</int>
							<CoordinateFrame name="CFrame">
								<X>-223.500015</X>
								<Y>154.399994</Y>
								<Z>14.000001</Z>
								<R00>-2.08713323e-015</R00>
								<R01>7.10542736e-015</R01>
								<R02>-1</R02>
								<R10>0</R10>
								<R11>1</R11>
								<R12>-7.10542736e-015</R12>
								<R20>1</R20>
								<R21>0</R21>
								<R22>2.08713323e-015</R22>
							</CoordinateFrame>
							<bool name="CanCollide">false</bool>
							<bool name="DraggingV1">false</bool>
							<float name="Elasticity">0.200000003</float>
							<token name="FormFactor">1</token>
							<float name="Friction">0.200000003</float>
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
							<string name="Name">Front_Center_Right</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>2.10786541e-010</X>
								<Y>2.43004861e-009</Y>
								<Z>-5.32704922e-011</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">0</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>-1.71242036e-007</X>
								<Y>0.0122267175</Y>
								<Z>2.69650764e-006</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>1.20000005</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX78">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><null></null></Content>
								<token name="MeshType">3</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.5</X>
									<Y>0.100000001</Y>
									<Z>0.100000001</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="Part" referent="RBX79">
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
							<int name="BrickColor">199</int>
							<CoordinateFrame name="CFrame">
								<X>-223.500015</X>
								<Y>154.75</Y>
								<Z>14.8500013</Z>
								<R00>-6.48087185e-015</R00>
								<R01>3.58350671e-015</R01>
								<R02>-1</R02>
								<R10>-0.703279376</R10>
								<R11>0.710913539</R11>
								<R12>-7.10542736e-015</R12>
								<R20>0.710913539</R20>
								<R21>0.703279376</R21>
								<R22>2.08713323e-015</R22>
							</CoordinateFrame>
							<bool name="CanCollide">false</bool>
							<bool name="DraggingV1">false</bool>
							<float name="Elasticity">0.200000003</float>
							<token name="FormFactor">1</token>
							<float name="Friction">0.200000003</float>
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
							<string name="Name">Back_Center_BL</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>2.10786541e-010</X>
								<Y>2.43004861e-009</Y>
								<Z>-5.32704922e-011</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">0</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>-1.69157843e-007</X>
								<Y>0.0122267175</Y>
								<Z>2.6965813e-006</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>1.20000005</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX80">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><null></null></Content>
								<token name="MeshType">3</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.100000001</X>
									<Y>0.5</Y>
									<Z>0.100000001</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="Part" referent="RBX81">
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
							<int name="BrickColor">199</int>
							<CoordinateFrame name="CFrame">
								<X>-223.500015</X>
								<Y>154.049988</Y>
								<Z>14.1500006</Z>
								<R00>-6.48087185e-015</R00>
								<R01>3.58350671e-015</R01>
								<R02>-1</R02>
								<R10>-0.703279376</R10>
								<R11>0.710913539</R11>
								<R12>-7.10542736e-015</R12>
								<R20>0.710913539</R20>
								<R21>0.703279376</R21>
								<R22>2.08713323e-015</R22>
							</CoordinateFrame>
							<bool name="CanCollide">false</bool>
							<bool name="DraggingV1">false</bool>
							<float name="Elasticity">0.200000003</float>
							<token name="FormFactor">1</token>
							<float name="Friction">0.200000003</float>
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
							<string name="Name">Back_Center_FL</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>2.10786541e-010</X>
								<Y>2.43004861e-009</Y>
								<Z>-5.32704922e-011</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">0</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>-1.70896172e-007</X>
								<Y>0.0122267175</Y>
								<Z>2.69643397e-006</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>1.20000005</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX82">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><null></null></Content>
								<token name="MeshType">3</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.100000001</X>
									<Y>0.5</Y>
									<Z>0.100000001</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="Part" referent="RBX83">
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
							<int name="BrickColor">199</int>
							<CoordinateFrame name="CFrame">
								<X>-223.500015</X>
								<Y>154.75</Y>
								<Z>14.1500006</Z>
								<R00>3.51332919e-015</R00>
								<R01>6.5191823e-015</R01>
								<R02>-1</R02>
								<R10>0.703279376</R10>
								<R11>0.710913539</R11>
								<R12>-7.10542736e-015</R12>
								<R20>0.710913539</R20>
								<R21>-0.703279376</R21>
								<R22>2.08713323e-015</R22>
							</CoordinateFrame>
							<bool name="CanCollide">false</bool>
							<bool name="DraggingV1">false</bool>
							<float name="Elasticity">0.200000003</float>
							<token name="FormFactor">1</token>
							<float name="Friction">0.200000003</float>
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
							<string name="Name">Back_Center_BR</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>2.10786541e-010</X>
								<Y>2.43004861e-009</Y>
								<Z>-5.32704922e-011</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">0</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>-1.70858883e-007</X>
								<Y>0.0122267175</Y>
								<Z>2.6965813e-006</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>1.20000005</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX84">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><null></null></Content>
								<token name="MeshType">3</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.100000001</X>
									<Y>0.5</Y>
									<Z>0.100000001</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="Part" referent="RBX85">
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
							<int name="BrickColor">199</int>
							<CoordinateFrame name="CFrame">
								<X>-223.500015</X>
								<Y>154.049988</Y>
								<Z>14.8500013</Z>
								<R00>3.51332919e-015</R00>
								<R01>6.5191823e-015</R01>
								<R02>-1</R02>
								<R10>0.703279376</R10>
								<R11>0.710913539</R11>
								<R12>-7.10542736e-015</R12>
								<R20>0.710913539</R20>
								<R21>-0.703279376</R21>
								<R22>2.08713323e-015</R22>
							</CoordinateFrame>
							<bool name="CanCollide">false</bool>
							<bool name="DraggingV1">false</bool>
							<float name="Elasticity">0.200000003</float>
							<token name="FormFactor">1</token>
							<float name="Friction">0.200000003</float>
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
							<string name="Name">Back_Center_FR</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>2.10786541e-010</X>
								<Y>2.43004861e-009</Y>
								<Z>-5.32704922e-011</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">0</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>-1.69195133e-007</X>
								<Y>0.0122267175</Y>
								<Z>2.69643397e-006</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>1.20000005</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX86">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><null></null></Content>
								<token name="MeshType">3</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.100000001</X>
									<Y>0.5</Y>
									<Z>0.100000001</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
				</Item>
				<Item class="Part" referent="RBX52">
					<Properties>
						<bool name="Anchored">false</bool>
						<float name="BackParamA">-0.5</float>
						<float name="BackParamB">0.5</float>
						<token name="BackSurface">0</token>
						<token name="BackSurfaceInput">0</token>
						<float name="BottomParamA">-0.5</float>
						<float name="BottomParamB">0.5</float>
						<token name="BottomSurface">2</token>
						<token name="BottomSurfaceInput">0</token>
						<int name="BrickColor">199</int>
						<CoordinateFrame name="CFrame">
							<X>-223.500015</X>
							<Y>154.949997</Y>
							<Z>12.000001</Z>
							<R00>-0.998026669</R00>
							<R01>-7.04952615e-015</R01>
							<R02>0.0627915338</R02>
							<R10>-0.00161139015</R10>
							<R11>-0.999670684</R11>
							<R12>-0.0256118961</R12>
							<R20>0.0627708584</R20>
							<R21>-0.0256625377</R21>
							<R22>0.997698009</R22>
						</CoordinateFrame>
						<bool name="CanCollide">true</bool>
						<bool name="DraggingV1">false</bool>
						<float name="Elasticity">0.200000003</float>
						<token name="FormFactor">1</token>
						<float name="Friction">0.200000003</float>
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
						<string name="Name">Frnt_Bdy3</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>2.10786541e-010</X>
							<Y>2.43004861e-009</Y>
							<Z>-5.32704922e-011</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>-1.76072831e-007</X>
							<Y>0.0122267175</Y>
							<Z>2.69662382e-006</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">1</token>
						<Vector3 name="size">
							<X>1</X>
							<Y>0.800000012</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
					<Item class="SpecialMesh" referent="RBX87">
						<Properties>
							<token name="LODX">2</token>
							<token name="LODY">2</token>
							<Content name="MeshId"><null></null></Content>
							<token name="MeshType">2</token>
							<string name="Name">Mesh</string>
							<Vector3 name="Offset">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
							<Vector3 name="Scale">
								<X>0.800000012</X>
								<Y>0.600000024</Y>
								<Z>1</Z>
							</Vector3>
							<Content name="TextureId"><null></null></Content>
							<Vector3 name="VertexColor">
								<X>1</X>
								<Y>1</Y>
								<Z>1</Z>
							</Vector3>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
				<Item class="Part" referent="RBX65">
					<Properties>
						<bool name="Anchored">false</bool>
						<float name="BackParamA">-0.5</float>
						<float name="BackParamB">0.5</float>
						<token name="BackSurface">0</token>
						<token name="BackSurfaceInput">0</token>
						<float name="BottomParamA">-0.5</float>
						<float name="BottomParamB">0.5</float>
						<token name="BottomSurface">2</token>
						<token name="BottomSurfaceInput">0</token>
						<int name="BrickColor">24</int>
						<CoordinateFrame name="CFrame">
							<X>-223.500015</X>
							<Y>155.649994</Y>
							<Z>14.000001</Z>
							<R00>8.44606621e-016</R00>
							<R01>7.35729938e-015</R01>
							<R02>-1</R02>
							<R10>0.389418334</R10>
							<R11>0.921060979</R11>
							<R12>-7.10542736e-015</R12>
							<R20>0.921060979</R20>
							<R21>-0.389418334</R21>
							<R22>2.08713323e-015</R22>
						</CoordinateFrame>
						<bool name="CanCollide">false</bool>
						<bool name="DraggingV1">false</bool>
						<float name="Elasticity">0.200000003</float>
						<token name="FormFactor">1</token>
						<float name="Friction">0.200000003</float>
						<float name="FrontParamA">-0.5</float>
						<float name="FrontParamB">0.5</float>
						<token name="FrontSurface">0</token>
						<token name="FrontSurfaceInput">0</token>
						<float name="LeftParamA">-0.5</float>
						<float name="LeftParamB">0.5</float>
						<token name="LeftSurface">2</token>
						<token name="LeftSurfaceInput">0</token>
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Frnt_Bdy4</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">2</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>2.10786541e-010</X>
							<Y>2.43004861e-009</Y>
							<Z>-5.32704922e-011</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>-1.71175444e-007</X>
							<Y>0.0122267175</Y>
							<Z>2.69677139e-006</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">1</token>
						<Vector3 name="size">
							<X>1</X>
							<Y>0.400000006</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
					<Item class="BlockMesh" referent="RBX88">
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
								<X>1.10000002</X>
								<Y>1</Y>
								<Z>0.899999976</Z>
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
				<Item class="Part" referent="RBX59">
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
						<int name="BrickColor">199</int>
						<CoordinateFrame name="CFrame">
							<X>-223.000015</X>
							<Y>154.899994</Y>
							<Z>14.000001</Z>
							<R00>-0.990607381</R00>
							<R01>-2.87388835e-015</R01>
							<R02>-0.136737213</R02>
							<R10>-0.135867715</R10>
							<R11>-0.112593792</R11>
							<R12>0.984308183</R12>
							<R20>-0.0153957615</R20>
							<R21>0.993641078</R21>
							<R22>0.111536242</R22>
						</CoordinateFrame>
						<bool name="CanCollide">false</bool>
						<bool name="DraggingV1">false</bool>
						<float name="Elasticity">0.200000003</float>
						<token name="FormFactor">1</token>
						<float name="Friction">0.200000003</float>
						<float name="FrontParamA">-0.5</float>
						<float name="FrontParamB">0.5</float>
						<token name="FrontSurface">2</token>
						<token name="FrontSurfaceInput">0</token>
						<float name="LeftParamA">-0.5</float>
						<float name="LeftParamB">0.5</float>
						<token name="LeftSurface">2</token>
						<token name="LeftSurfaceInput">0</token>
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Pipe</string>
						<float name="Reflectance">1</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">2</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>2.10786541e-010</X>
							<Y>2.43004861e-009</Y>
							<Z>-5.32704922e-011</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0.200000003</float>
						<Vector3 name="Velocity">
							<X>-1.71215405e-007</X>
							<Y>0.0122267175</Y>
							<Z>2.69539805e-006</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">1</token>
						<Vector3 name="size">
							<X>1</X>
							<Y>2.4000001</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
					<Item class="SpecialMesh" referent="RBX89">
						<Properties>
							<token name="LODX">2</token>
							<token name="LODY">2</token>
							<Content name="MeshId"><null></null></Content>
							<token name="MeshType">0</token>
							<string name="Name">Mesh</string>
							<Vector3 name="Offset">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
							<Vector3 name="Scale">
								<X>0.5</X>
								<Y>1</Y>
								<Z>1</Z>
							</Vector3>
							<Content name="TextureId"><null></null></Content>
							<Vector3 name="VertexColor">
								<X>1</X>
								<Y>1</Y>
								<Z>1</Z>
							</Vector3>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
				<Item class="Part" referent="RBX90">
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
						<int name="BrickColor">23</int>
						<CoordinateFrame name="CFrame">
							<X>-223.500015</X>
							<Y>154.399994</Y>
							<Z>12.500001</Z>
							<R00>1</R00>
							<R01>7.10542736e-015</R01>
							<R02>-2.08713323e-015</R02>
							<R10>7.10542736e-015</R10>
							<R11>1</R11>
							<R12>0</R12>
							<R20>-2.08713323e-015</R20>
							<R21>0</R21>
							<R22>1</R22>
						</CoordinateFrame>
						<bool name="CanCollide">false</bool>
						<bool name="DraggingV1">false</bool>
						<float name="Elasticity">0.200000003</float>
						<token name="FormFactor">1</token>
						<float name="Friction">0.200000003</float>
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
						<string name="Name">Engine</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>2.10786541e-010</X>
							<Y>2.43004861e-009</Y>
							<Z>-5.32704922e-011</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">2</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">1</float>
						<Vector3 name="Velocity">
							<X>-1.74887106e-007</X>
							<Y>0.0122267175</Y>
							<Z>2.69650764e-006</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">1</token>
						<Vector3 name="size">
							<X>2</X>
							<Y>0.400000006</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
					<Item class="IntValue" referent="RBX91">
						<Properties>
							<string name="Name">Count</string>
							<int name="Value">0</int>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Script" referent="RBX92">
						<Properties>
							<bool name="Disabled">true</bool>
							<Content name="LinkedSource"><null></null></Content>
							<string name="Name">Script</string>
							<ProtectedString name="Source">model = script.Parent.Parent.Parent
backup = model:clone()
local debounce = false

function onTouch(part)
	if (part.Name == &quot;Safe&quot;) and (debounce == false) and (script.Parent.Count.Value == 0) then
	debounce = true
	wait(2)
	model = backup:clone()
	model.Parent = game.Workspace
	model:makeJoints()
	script.Parent.Count.Value = 1
	debounce = false
	end
end 
script.Parent.Touched:connect(onTouch)</ProtectedString>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="BodyGyro" referent="RBX93">
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
								<X>400000</X>
								<Y>0</Y>
								<Z>400000</Z>
							</Vector3>
						</Properties>
					</Item>
					<Item class="BodyPosition" referent="RBX94">
						<Properties>
							<float name="D">1250</float>
							<string name="Name">BodyPosition</string>
							<float name="P">10000</float>
							<bool name="archivable">true</bool>
							<Vector3 name="maxForce">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
							<Vector3 name="position">
								<X>0</X>
								<Y>20</Y>
								<Z>0</Z>
							</Vector3>
						</Properties>
					</Item>
					<Item class="BodyThrust" referent="RBX95">
						<Properties>
							<string name="Name">BodyThrust</string>
							<bool name="archivable">true</bool>
							<Vector3 name="force">
								<X>0</X>
								<Y>-1</Y>
								<Z>0</Z>
							</Vector3>
							<Vector3 name="location">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
						</Properties>
					</Item>
					<Item class="Script" referent="RBX96">
						<Properties>
							<bool name="Disabled">false</bool>
							<Content name="LinkedSource"><null></null></Content>
							<string name="Name">Random</string>
							<ProtectedString name="Source">local h = game.Workspace:FindFirstChild(&quot;Hint&quot;)

if h == nil then
	local h = Instance.new(&quot;Hint&quot;)
	h.Name = &quot;Hint&quot;
	h.Parent = game.Workspace
	h.Text = &quot;The maker of this map thanks Orange451 because he made those AWESOME bikes...&quot;
end


</ProtectedString>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
				<Item class="Seat" referent="RBX97">
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
						<int name="BrickColor">141</int>
						<CoordinateFrame name="CFrame">
							<X>-223.500015</X>
							<Y>154</Y>
							<Z>13.000001</Z>
							<R00>1</R00>
							<R01>7.10542736e-015</R01>
							<R02>-2.08713323e-015</R02>
							<R10>7.10542736e-015</R10>
							<R11>1</R11>
							<R12>0</R12>
							<R20>-2.08713323e-015</R20>
							<R21>0</R21>
							<R22>1</R22>
						</CoordinateFrame>
						<bool name="CanCollide">true</bool>
						<bool name="DraggingV1">false</bool>
						<float name="Elasticity">0.200000003</float>
						<token name="FormFactor">1</token>
						<float name="Friction">0.200000003</float>
						<float name="FrontParamA">-0.5</float>
						<float name="FrontParamB">0.5</float>
						<token name="FrontSurface">2</token>
						<token name="FrontSurfaceInput">0</token>
						<float name="LeftParamA">-0.5</float>
						<float name="LeftParamB">0.5</float>
						<token name="LeftSurface">2</token>
						<token name="LeftSurfaceInput">0</token>
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Seat</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">2</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>2.10786541e-010</X>
							<Y>2.43004861e-009</Y>
							<Z>-5.32704922e-011</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">2</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">1</float>
						<Vector3 name="Velocity">
							<X>-1.73693394e-007</X>
							<Y>0.0122267175</Y>
							<Z>2.69642328e-006</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">1</token>
						<Vector3 name="size">
							<X>1</X>
							<Y>0.400000006</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
					<Item class="Script" referent="RBX98">
						<Properties>
							<bool name="Disabled">false</bool>
							<Content name="LinkedSource"><null></null></Content>
							<string name="Name">Script</string>
							<ProtectedString name="Source">function sitting()
	local w = script.Parent:findFirstChild(&quot;SeatWeld&quot;)
	if w ~= nil then
		w.C0 = CFrame.new(0,3.1,0)*CFrame.fromEulerAnglesXYZ(-(math.pi/2)-0.3,0,0)
	end
end

script.Parent.ChildAdded:connect(sitting)</ProtectedString>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
				<Item class="Part" referent="RBX41">
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
						<int name="BrickColor">26</int>
						<CoordinateFrame name="CFrame">
							<X>-223.550003</X>
							<Y>156.82724</Y>
							<Z>11.6374741</Z>
							<R00>7.30738881e-015</R00>
							<R01>0.999917686</R01>
							<R02>0.012832325</R02>
							<R10>0.900985956</R10>
							<R11>0.00556728244</R11>
							<R12>-0.433812559</R12>
							<R20>-0.433848321</R20>
							<R21>0.0115617439</R21>
							<R22>-0.900911748</R22>
						</CoordinateFrame>
						<bool name="CanCollide">false</bool>
						<bool name="DraggingV1">false</bool>
						<float name="Elasticity">0.200000003</float>
						<token name="FormFactor">1</token>
						<float name="Friction">0.200000003</float>
						<float name="FrontParamA">-0.5</float>
						<float name="FrontParamB">0.5</float>
						<token name="FrontSurface">2</token>
						<token name="FrontSurfaceInput">0</token>
						<float name="LeftParamA">-0.5</float>
						<float name="LeftParamB">0.5</float>
						<token name="LeftSurface">2</token>
						<token name="LeftSurfaceInput">0</token>
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Hndle</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">2</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>2.10786541e-010</X>
							<Y>2.43004861e-009</Y>
							<Z>-5.32704922e-011</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>-1.76853789e-007</X>
							<Y>0.0122267175</Y>
							<Z>2.69714087e-006</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">1</token>
						<Vector3 name="size">
							<X>1</X>
							<Y>2</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
					<Item class="SpecialMesh" referent="RBX99">
						<Properties>
							<token name="LODX">2</token>
							<token name="LODY">2</token>
							<Content name="MeshId"><null></null></Content>
							<token name="MeshType">0</token>
							<string name="Name">Mesh</string>
							<Vector3 name="Offset">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
							<Vector3 name="Scale">
								<X>0.400000006</X>
								<Y>1</Y>
								<Z>1</Z>
							</Vector3>
							<Content name="TextureId"><null></null></Content>
							<Vector3 name="VertexColor">
								<X>1</X>
								<Y>1</Y>
								<Z>1</Z>
							</Vector3>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
				<Item class="Part" referent="RBX57">
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
						<int name="BrickColor">26</int>
						<CoordinateFrame name="CFrame">
							<X>-223.500015</X>
							<Y>154.399994</Y>
							<Z>14.500001</Z>
							<R00>-2.08713323e-015</R00>
							<R01>7.10542736e-015</R01>
							<R02>-1</R02>
							<R10>0</R10>
							<R11>1</R11>
							<R12>-7.10542736e-015</R12>
							<R20>1</R20>
							<R21>0</R21>
							<R22>2.08713323e-015</R22>
						</CoordinateFrame>
						<bool name="CanCollide">true</bool>
						<bool name="DraggingV1">false</bool>
						<float name="Elasticity">0.200000003</float>
						<token name="FormFactor">1</token>
						<float name="Friction">0.200000003</float>
						<float name="FrontParamA">-0.5</float>
						<float name="FrontParamB">0.5</float>
						<token name="FrontSurface">0</token>
						<token name="FrontSurfaceInput">0</token>
						<float name="LeftParamA">-0.5</float>
						<float name="LeftParamB">0.5</float>
						<token name="LeftSurface">3</token>
						<token name="LeftSurfaceInput">0</token>
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">BackWheel</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">4</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>2.10786541e-010</X>
							<Y>2.43004861e-009</Y>
							<Z>-5.32704922e-011</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>-1.70027008e-007</X>
							<Y>0.0122267175</Y>
							<Z>2.69650764e-006</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">1</token>
						<Vector3 name="size">
							<X>2</X>
							<Y>2</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
					<Item class="SpecialMesh" referent="RBX100">
						<Properties>
							<token name="LODX">2</token>
							<token name="LODY">2</token>
							<Content name="MeshId"><url>http://www.emeraldolds.glados.pro/asset?id=3270017</url></Content>
							<token name="MeshType">5</token>
							<string name="Name">Mesh</string>
							<Vector3 name="Offset">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
							<Vector3 name="Scale">
								<X>2</X>
								<Y>2</Y>
								<Z>3.25</Z>
							</Vector3>
							<Content name="TextureId"><null></null></Content>
							<Vector3 name="VertexColor">
								<X>1</X>
								<Y>1</Y>
								<Z>1</Z>
							</Vector3>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="SpecialMesh" referent="RBX101">
						<Properties>
							<token name="LODX">2</token>
							<token name="LODY">2</token>
							<Content name="MeshId"><url>http://www.emeraldolds.glados.pro/asset?id=3270017</url></Content>
							<token name="MeshType">5</token>
							<string name="Name">Mesh</string>
							<Vector3 name="Offset">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
							<Vector3 name="Scale">
								<X>2</X>
								<Y>2</Y>
								<Z>3.25</Z>
							</Vector3>
							<Content name="TextureId"><null></null></Content>
							<Vector3 name="VertexColor">
								<X>1</X>
								<Y>1</Y>
								<Z>1</Z>
							</Vector3>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX102">
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
								<Y>0.5</Y>
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
							<string name="Name">Weld</string>
							<Ref name="Part0">RBX57</Ref>
							<Ref name="Part1">RBX71</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX103">
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
							<string name="Name">Weld</string>
							<Ref name="Part0">RBX57</Ref>
							<Ref name="Part1">RBX69</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX104">
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
								<X>0.00267195702</X>
								<Y>0.49496752</Y>
								<Z>0</Z>
								<R00>0.710913539</R00>
								<R01>-0.703279376</R01>
								<R02>0</R02>
								<R10>0.703279376</R10>
								<R11>0.710913539</R11>
								<R12>0</R12>
								<R20>0</R20>
								<R21>0</R21>
								<R22>1</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">RBX57</Ref>
							<Ref name="Part1">RBX81</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX105">
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
								<X>-0.00267195702</X>
								<Y>0.49496752</Y>
								<Z>0</Z>
								<R00>0.710913539</R00>
								<R01>0.703279376</R01>
								<R02>0</R02>
								<R10>-0.703279376</R10>
								<R11>0.710913539</R11>
								<R12>0</R12>
								<R20>0</R20>
								<R21>0</R21>
								<R22>1</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">RBX57</Ref>
							<Ref name="Part1">RBX85</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX106">
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
								<X>0.00267195702</X>
								<Y>-0.49496752</Y>
								<Z>0</Z>
								<R00>0.710913539</R00>
								<R01>0.703279376</R01>
								<R02>0</R02>
								<R10>-0.703279376</R10>
								<R11>0.710913539</R11>
								<R12>0</R12>
								<R20>0</R20>
								<R21>0</R21>
								<R22>1</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">RBX57</Ref>
							<Ref name="Part1">RBX83</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX107">
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
								<X>-0.00267195702</X>
								<Y>-0.49496752</Y>
								<Z>0</Z>
								<R00>0.710913539</R00>
								<R01>-0.703279376</R01>
								<R02>0</R02>
								<R10>0.703279376</R10>
								<R11>0.710913539</R11>
								<R12>0</R12>
								<R20>0</R20>
								<R21>0</R21>
								<R22>1</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">RBX57</Ref>
							<Ref name="Part1">RBX79</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX108">
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
							<string name="Name">Weld</string>
							<Ref name="Part0">RBX57</Ref>
							<Ref name="Part1">RBX67</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX109">
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
								<X>0.5</X>
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
							<string name="Name">Weld</string>
							<Ref name="Part0">RBX57</Ref>
							<Ref name="Part1">RBX77</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX110">
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
								<X>-0.5</X>
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
							<string name="Name">Weld</string>
							<Ref name="Part0">RBX57</Ref>
							<Ref name="Part1">RBX75</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX111">
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
								<Y>-0.5</Y>
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
							<string name="Name">Weld</string>
							<Ref name="Part0">RBX57</Ref>
							<Ref name="Part1">RBX73</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
				<Item class="Part" referent="RBX50">
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
						<int name="BrickColor">26</int>
						<CoordinateFrame name="CFrame">
							<X>-223.500015</X>
							<Y>154.399994</Y>
							<Z>10.500001</Z>
							<R00>-2.08713323e-015</R00>
							<R01>7.10542736e-015</R01>
							<R02>-1</R02>
							<R10>0</R10>
							<R11>1</R11>
							<R12>-7.10542736e-015</R12>
							<R20>1</R20>
							<R21>0</R21>
							<R22>2.08713323e-015</R22>
						</CoordinateFrame>
						<bool name="CanCollide">true</bool>
						<bool name="DraggingV1">false</bool>
						<float name="Elasticity">0.200000003</float>
						<token name="FormFactor">1</token>
						<float name="Friction">0.200000003</float>
						<float name="FrontParamA">-0.5</float>
						<float name="FrontParamB">0.5</float>
						<token name="FrontSurface">0</token>
						<token name="FrontSurfaceInput">0</token>
						<float name="LeftParamA">-0.5</float>
						<float name="LeftParamB">0.5</float>
						<token name="LeftSurface">3</token>
						<token name="LeftSurfaceInput">0</token>
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">FrontWheel</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">4</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>2.10786541e-010</X>
							<Y>2.43004861e-009</Y>
							<Z>-5.32704922e-011</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>-1.79747204e-007</X>
							<Y>0.0122267175</Y>
							<Z>2.69650786e-006</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">1</token>
						<Vector3 name="size">
							<X>2</X>
							<Y>2</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
					<Item class="SpecialMesh" referent="RBX112">
						<Properties>
							<token name="LODX">2</token>
							<token name="LODY">2</token>
							<Content name="MeshId"><url>http://www.emeraldolds.glados.pro/asset?id=3270017</url></Content>
							<token name="MeshType">5</token>
							<string name="Name">Mesh</string>
							<Vector3 name="Offset">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
							<Vector3 name="Scale">
								<X>2</X>
								<Y>2</Y>
								<Z>3.25</Z>
							</Vector3>
							<Content name="TextureId"><null></null></Content>
							<Vector3 name="VertexColor">
								<X>1</X>
								<Y>1</Y>
								<Z>1</Z>
							</Vector3>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="SpecialMesh" referent="RBX113">
						<Properties>
							<token name="LODX">2</token>
							<token name="LODY">2</token>
							<Content name="MeshId"><url>http://www.emeraldolds.glados.pro/asset?id=3270017</url></Content>
							<token name="MeshType">5</token>
							<string name="Name">Mesh</string>
							<Vector3 name="Offset">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
							<Vector3 name="Scale">
								<X>2</X>
								<Y>2</Y>
								<Z>3.25</Z>
							</Vector3>
							<Content name="TextureId"><null></null></Content>
							<Vector3 name="VertexColor">
								<X>1</X>
								<Y>1</Y>
								<Z>1</Z>
							</Vector3>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX114">
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
								<X>0.013008845</X>
								<Y>-1.58818471</Y>
								<Z>0</Z>
								<R00>0.87758255</R00>
								<R01>-0.47942555</R01>
								<R02>0</R02>
								<R10>0.47942555</R10>
								<R11>0.87758255</R11>
								<R12>0</R12>
								<R20>0</R20>
								<R21>0</R21>
								<R22>1</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">RBX50</Ref>
							<Ref name="Part1">RBX21</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX115">
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
								<X>0.126139134</X>
								<Y>-1.62760222</Y>
								<Z>0</Z>
								<R00>0.921060979</R00>
								<R01>0.389418334</R01>
								<R02>0</R02>
								<R10>-0.389418334</R10>
								<R11>0.921060979</R11>
								<R12>0</R12>
								<R20>0</R20>
								<R21>0</R21>
								<R22>1</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">RBX50</Ref>
							<Ref name="Part1">RBX19</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX116">
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
								<X>-0.00567656429</X>
								<Y>-1.57317126</Y>
								<Z>0</Z>
								<R00>0.998200536</R00>
								<R01>-0.0599640049</R01>
								<R02>0</R02>
								<R10>0.0599640049</R10>
								<R11>0.998200536</R11>
								<R12>0</R12>
								<R20>0</R20>
								<R21>0</R21>
								<R22>1</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">RBX50</Ref>
							<Ref name="Part1">RBX17</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX117">
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
								<X>-0.550000012</X>
								<Y>-2.5999999</Y>
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
							<string name="Name">Weld</string>
							<Ref name="Part0">RBX50</Ref>
							<Ref name="Part1">RBX43</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX118">
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
								<X>0.0104347086</X>
								<Y>-1.26486814</Y>
								<Z>-0.400000006</Z>
								<R00>0.946042359</R00>
								<R01>-0.324043036</R01>
								<R02>0</R02>
								<R10>0.324043036</R10>
								<R11>0.946042359</R11>
								<R12>0</R12>
								<R20>0</R20>
								<R21>0</R21>
								<R22>1</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">RBX50</Ref>
							<Ref name="Part1">RBX35</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX119">
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
								<X>0.0104347086</X>
								<Y>-1.26486814</Y>
								<Z>0.400000006</Z>
								<R00>0.946042359</R00>
								<R01>-0.324043036</R01>
								<R02>0</R02>
								<R10>0.324043036</R10>
								<R11>0.946042359</R11>
								<R12>0</R12>
								<R20>0</R20>
								<R21>0</R21>
								<R22>1</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">RBX50</Ref>
							<Ref name="Part1">RBX31</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX120">
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
								<X>0.5</X>
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
							<string name="Name">Weld</string>
							<Ref name="Part0">RBX50</Ref>
							<Ref name="Part1">RBX15</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX121">
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
								<X>-0.5</X>
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
							<string name="Name">Weld</string>
							<Ref name="Part0">RBX50</Ref>
							<Ref name="Part1">RBX13</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX122">
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
								<Y>-0.5</Y>
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
							<string name="Name">Weld</string>
							<Ref name="Part0">RBX50</Ref>
							<Ref name="Part1">RBX11</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX123">
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
								<Y>0.5</Y>
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
							<string name="Name">Weld</string>
							<Ref name="Part0">RBX50</Ref>
							<Ref name="Part1">RBX9</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX124">
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
								<X>0.00267195702</X>
								<Y>0.49496752</Y>
								<Z>0</Z>
								<R00>0.710913539</R00>
								<R01>-0.703279376</R01>
								<R02>0</R02>
								<R10>0.703279376</R10>
								<R11>0.710913539</R11>
								<R12>0</R12>
								<R20>0</R20>
								<R21>0</R21>
								<R22>1</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">RBX50</Ref>
							<Ref name="Part1">RBX29</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX125">
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
								<X>-0.00267195702</X>
								<Y>0.49496752</Y>
								<Z>0</Z>
								<R00>0.710913539</R00>
								<R01>0.703279376</R01>
								<R02>0</R02>
								<R10>-0.703279376</R10>
								<R11>0.710913539</R11>
								<R12>0</R12>
								<R20>0</R20>
								<R21>0</R21>
								<R22>1</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">RBX50</Ref>
							<Ref name="Part1">RBX27</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX126">
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
								<X>0.00267195702</X>
								<Y>-0.49496752</Y>
								<Z>0</Z>
								<R00>0.710913539</R00>
								<R01>0.703279376</R01>
								<R02>0</R02>
								<R10>-0.703279376</R10>
								<R11>0.710913539</R11>
								<R12>0</R12>
								<R20>0</R20>
								<R21>0</R21>
								<R22>1</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">RBX50</Ref>
							<Ref name="Part1">RBX25</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX127">
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
								<X>-0.00267195702</X>
								<Y>-0.49496752</Y>
								<Z>0</Z>
								<R00>0.710913539</R00>
								<R01>-0.703279376</R01>
								<R02>0</R02>
								<R10>0.703279376</R10>
								<R11>0.710913539</R11>
								<R12>0</R12>
								<R20>0</R20>
								<R21>0</R21>
								<R22>1</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">RBX50</Ref>
							<Ref name="Part1">RBX23</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX128">
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
							<string name="Name">Weld</string>
							<Ref name="Part0">RBX50</Ref>
							<Ref name="Part1">RBX7</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX129">
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
							<string name="Name">Weld</string>
							<Ref name="Part0">RBX50</Ref>
							<Ref name="Part1">RBX5</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
				<Item class="CFrameValue" referent="RBX130">
					<Properties>
						<string name="Name">OriginCFrame</string>
						<CoordinateFrame name="Value">
							<X>7.5</X>
							<Y>1.38959146</Y>
							<Z>23</Z>
							<R00>1</R00>
							<R01>-1.48220678e-007</R01>
							<R02>4.29764171e-008</R02>
							<R10>1.48220707e-007</R10>
							<R11>1</R11>
							<R12>-7.45453406e-007</R12>
							<R20>-4.29763034e-008</R20>
							<R21>7.45453406e-007</R21>
							<R22>1</R22>
						</CoordinateFrame>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="CFrameValue" referent="RBX131">
					<Properties>
						<string name="Name">OriginCFrame</string>
						<CoordinateFrame name="Value">
							<X>9.49999905</X>
							<Y>1.38958979</Y>
							<Z>12.000001</Z>
							<R00>1</R00>
							<R01>-1.12679241e-011</R01>
							<R02>1.59970978e-006</R02>
							<R10>1.12678512e-011</R10>
							<R11>1</R11>
							<R12>4.60524223e-011</R12>
							<R20>-1.59970978e-006</R20>
							<R21>-4.60524015e-011</R21>
							<R22>1</R22>
						</CoordinateFrame>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="CFrameValue" referent="RBX132">
					<Properties>
						<string name="Name">OriginCFrame</string>
						<CoordinateFrame name="Value">
							<X>5.49999905</X>
							<Y>1.3895967</Y>
							<Z>19</Z>
							<R00>1</R00>
							<R01>-1.48223336e-007</R01>
							<R02>1.59963895e-006</R02>
							<R10>1.4822453e-007</R10>
							<R11>1</R11>
							<R12>-7.4545369e-007</R12>
							<R20>-1.59963895e-006</R20>
							<R21>7.45453917e-007</R21>
							<R22>1</R22>
						</CoordinateFrame>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="CFrameValue" referent="RBX133">
					<Properties>
						<string name="Name">OriginCFrame</string>
						<CoordinateFrame name="Value">
							<X>-7.50000095</X>
							<Y>1.38959408</Y>
							<Z>21</Z>
							<R00>1</R00>
							<R01>-1.48223378e-007</R01>
							<R02>1.60844718e-006</R02>
							<R10>1.48224572e-007</R10>
							<R11>1</R11>
							<R12>-7.45453292e-007</R12>
							<R20>-1.60844718e-006</R20>
							<R21>7.45453519e-007</R21>
							<R22>1</R22>
						</CoordinateFrame>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="CFrameValue" referent="RBX134">
					<Properties>
						<string name="Name">OriginCFrame</string>
						<CoordinateFrame name="Value">
							<X>6.49999905</X>
							<Y>1.38958836</Y>
							<Z>13.000001</Z>
							<R00>1</R00>
							<R01>-9.97388457e-012</R01>
							<R02>1.61722926e-006</R02>
							<R10>9.97386722e-012</R10>
							<R11>1</R11>
							<R12>1.11764903e-011</R12>
							<R20>-1.61722926e-006</R20>
							<R21>-1.11764747e-011</R21>
							<R22>1</R22>
						</CoordinateFrame>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="CFrameValue" referent="RBX135">
					<Properties>
						<string name="Name">OriginCFrame</string>
						<CoordinateFrame name="Value">
							<X>10.499999</X>
							<Y>1.38958192</Y>
							<Z>16</Z>
							<R00>1</R00>
							<R01>4.54326542e-011</R01>
							<R02>1.61887567e-006</R02>
							<R10>-4.54326611e-011</R10>
							<R11>1</R11>
							<R12>6.41348519e-012</R12>
							<R20>-1.61887567e-006</R20>
							<R21>-6.41355892e-012</R21>
							<R22>1</R22>
						</CoordinateFrame>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="CFrameValue" referent="RBX136">
					<Properties>
						<string name="Name">OriginCFrame</string>
						<CoordinateFrame name="Value">
							<X>-23.5</X>
							<Y>167</Y>
							<Z>15</Z>
							<R00>-1</R00>
							<R01>0</R01>
							<R02>0</R02>
							<R10>0</R10>
							<R11>1</R11>
							<R12>0</R12>
							<R20>0</R20>
							<R21>0</R21>
							<R22>-1</R22>
						</CoordinateFrame>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="CFrameValue" referent="RBX137">
					<Properties>
						<string name="Name">OriginCFrame</string>
						<CoordinateFrame name="Value">
							<X>-23.5</X>
							<Y>166.889664</Y>
							<Z>15</Z>
							<R00>-1</R00>
							<R01>4.08797735e-012</R01>
							<R02>8.4893953e-011</R02>
							<R10>4.08797735e-012</R10>
							<R11>1</R11>
							<R12>-1.61757706e-013</R12>
							<R20>-8.4893953e-011</R20>
							<R21>-1.61757706e-013</R21>
							<R22>-1</R22>
						</CoordinateFrame>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="CFrameValue" referent="RBX138">
					<Properties>
						<string name="Name">OriginCFrame</string>
						<CoordinateFrame name="Value">
							<X>-23.5</X>
							<Y>166.88942</Y>
							<Z>15.000001</Z>
							<R00>-1</R00>
							<R01>1.48221673e-007</R01>
							<R02>1.2695936e-010</R02>
							<R10>1.48221673e-007</R10>
							<R11>1</R11>
							<R12>-7.45448858e-007</R12>
							<R20>-1.27069855e-010</R20>
							<R21>-7.45448858e-007</R21>
							<R22>-1</R22>
						</CoordinateFrame>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="CFrameValue" referent="RBX139">
					<Properties>
						<string name="Name">OriginCFrame</string>
						<CoordinateFrame name="Value">
							<X>-24.5</X>
							<Y>166.88942</Y>
							<Z>15</Z>
							<R00>1</R00>
							<R01>-1.48221048e-007</R01>
							<R02>3.42644597e-008</R02>
							<R10>1.48221076e-007</R10>
							<R11>1</R11>
							<R12>-7.45451587e-007</R12>
							<R20>-3.4264346e-008</R20>
							<R21>7.45451587e-007</R21>
							<R22>1</R22>
						</CoordinateFrame>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="CFrameValue" referent="RBX140">
					<Properties>
						<string name="Name">OriginCFrame</string>
						<CoordinateFrame name="Value">
							<X>-5.5</X>
							<Y>1.38955498</Y>
							<Z>17</Z>
							<R00>1</R00>
							<R01>-1.48209779e-007</R01>
							<R02>3.70943312e-008</R02>
							<R10>1.48209807e-007</R10>
							<R11>1</R11>
							<R12>-7.45452496e-007</R12>
							<R20>-3.70942175e-008</R20>
							<R21>7.45452496e-007</R21>
							<R22>1</R22>
						</CoordinateFrame>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="CFrameValue" referent="RBX141">
					<Properties>
						<string name="Name">OriginCFrame</string>
						<CoordinateFrame name="Value">
							<X>-7.5</X>
							<Y>1.58955491</Y>
							<Z>20</Z>
							<R00>1</R00>
							<R01>-1.4821056e-007</R01>
							<R02>3.99017139e-008</R02>
							<R10>1.48210589e-007</R10>
							<R11>1</R11>
							<R12>-7.45452212e-007</R12>
							<R20>-3.99016002e-008</R20>
							<R21>7.45452212e-007</R21>
							<R22>1</R22>
						</CoordinateFrame>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Script" referent="RBX142">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">WeldScript</string>
						<ProtectedString name="Source">wait(0.08)
local w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = script.Parent.FrontWheel
	w1.Part0 = w1.Parent
	w1.Part1 = script.Parent.Frontwhl.FrontWheel_i1
	w1.C1 = CFrame.fromEulerAnglesXYZ(0, 0, 0) * CFrame.new(0, 0, 0)


	local w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = script.Parent.FrontWheel
	w1.Part0 = w1.Parent
	w1.Part1 = script.Parent.Frontwhl.Front_Center
	w1.C1 = CFrame.fromEulerAnglesXYZ(0, 0, 0) * CFrame.new(0, 0, 0)

	local w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = script.Parent.FrontWheel
	w1.Part0 = w1.Parent
	w1.Part1 = script.Parent.Frontwhl.Front_Center_BL
	w1.C1 = CFrame.fromEulerAnglesXYZ(0, 0, .78) * CFrame.new(-0.35, -0.35, 0)

	local w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = script.Parent.FrontWheel
	w1.Part0 = w1.Parent
	w1.Part1 = script.Parent.Frontwhl.Front_Center_BR
	w1.C1 = CFrame.fromEulerAnglesXYZ(0, 0, -0.78) * CFrame.new(0.35, -0.35, 0)

	local w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = script.Parent.FrontWheel
	w1.Part0 = w1.Parent
	w1.Part1 = script.Parent.Frontwhl.Front_Center_FR
	w1.C1 = CFrame.fromEulerAnglesXYZ(0, 0, -.78) * CFrame.new(-0.35, 0.35, 0)

	local w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = script.Parent.FrontWheel
	w1.Part0 = w1.Parent
	w1.Part1 = script.Parent.Frontwhl.Front_Center_FL
	w1.C1 = CFrame.fromEulerAnglesXYZ(0, 0, .78) * CFrame.new(0.35, 0.35, 0)


	local w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = script.Parent.FrontWheel
	w1.Part0 = w1.Parent
	w1.Part1 = script.Parent.Frontwhl.Front_Center_top
	w1.C1 = CFrame.fromEulerAnglesXYZ(0, 0, 0) * CFrame.new(0, .5, 0)

	local w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = script.Parent.FrontWheel
	w1.Part0 = w1.Parent
	w1.Part1 = script.Parent.Frontwhl.Front_Center_Bottom
	w1.C1 = CFrame.fromEulerAnglesXYZ(0, 0, 0) * CFrame.new(0, -0.5, 0)

	local w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = script.Parent.FrontWheel
	w1.Part0 = w1.Parent
	w1.Part1 = script.Parent.Frontwhl.Front_Center_Left
	w1.C1 = CFrame.fromEulerAnglesXYZ(0, 0, 0) * CFrame.new(-0.5, 0, 0)

	local w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = script.Parent.FrontWheel
	w1.Part0 = w1.Parent
	w1.Part1 = script.Parent.Frontwhl.Front_Center_Right
	w1.C1 = CFrame.fromEulerAnglesXYZ(0, 0, 0) * CFrame.new(0.5, 0, 0)

	local w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = script.Parent.FrontWheel
	w1.Part0 = w1.Parent
	w1.Part1 = script.Parent.Left_Bar
	w1.C1 = CFrame.fromEulerAnglesXYZ(0, 0, 0.33) * CFrame.new(-0.4, -1.2, .4)

	local w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = script.Parent.FrontWheel
	w1.Part0 = w1.Parent
	w1.Part1 = script.Parent.Right_Bar
	w1.C1 = CFrame.fromEulerAnglesXYZ(0, 0, 0.33) * CFrame.new(-0.4, -1.2, -0.4)

	local w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = script.Parent.Left_Bar
	w1.Part0 = w1.Parent
	w1.Part1 = script.Parent.Left_Bar2
	w1.C1 = CFrame.fromEulerAnglesXYZ(0, 0, 0) * CFrame.new(-0, -1, 0)

	local w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = script.Parent.Right_Bar
	w1.Part0 = w1.Parent
	w1.Part1 = script.Parent.Right_Bar2
	w1.C1 = CFrame.fromEulerAnglesXYZ(0, 0, 0) * CFrame.new(0, -1, 0)

	local w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = script.Parent.Right_Bar2
	w1.Part0 = w1.Parent
	w1.Part1 = script.Parent.Hndle
	w1.C1 = CFrame.fromEulerAnglesXYZ(14.15, 0, 16.5) * CFrame.new(-0.3, -0.4, 0.35)
--------------------------------------------------------------------------------------------------------------------------------------------------------

	local w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = script.Parent.FrontWheel
	w1.Part0 = w1.Parent
	w1.Part1 = script.Parent.Sign
	w1.C1 = CFrame.fromEulerAnglesXYZ(0, 0, 0) * CFrame.new(-.55, -2.6, 0)

	local w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = script.Parent.FrontWheel
	w1.Part0 = w1.Parent
	w1.Part1 = script.Parent.Frontwhl.TOP
	w1.C1 = CFrame.fromEulerAnglesXYZ(0, 0, .06) * CFrame.new(-0.1, -1.57, 0)

	local w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = script.Parent.FrontWheel
	w1.Part0 = w1.Parent
	w1.Part1 = script.Parent.Frontwhl.TOP1
	w1.C1 = CFrame.fromEulerAnglesXYZ(0, 0, -0.4) * CFrame.new(0.75, -1.45, 0)

	local w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = script.Parent.FrontWheel
	w1.Part0 = w1.Parent
	w1.Part1 = script.Parent.Frontwhl.TOP2
	w1.C1 = CFrame.fromEulerAnglesXYZ(0, 0, 0.5) * CFrame.new(-0.75, -1.4, 0)


	local w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = script.Parent.Frnt_Bdy
	w1.Part0 = w1.Parent
	w1.Part1 = script.Parent.Frnt_Bdy1
	w1.C1 = CFrame.fromEulerAnglesXYZ(0, 0, 0) * CFrame.new(0, -0.5, 0)


	local w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = script.Parent.Frnt_Bdy
	w1.Part0 = w1.Parent
	w1.Part1 = script.Parent.FrontWheel
	w1.C1 = CFrame.fromEulerAnglesXYZ(0, 0, 0) * CFrame.new(1.5, 1, 0)


	local w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = script.Parent.Frnt_Bdy0
	w1.Part0 = w1.Parent
	w1.Part1 = script.Parent.Frnt_Bdy
	w1.C1 = CFrame.fromEulerAnglesXYZ(0, 0, 0) * CFrame.new(1, -0.5, 0)

	local w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = script.Parent.Frnt_Bdy0
	w1.Part0 = w1.Parent
	w1.Part1 = script.Parent.Frnt_Bdy2
	w1.C1 = CFrame.fromEulerAnglesXYZ(0, 0, 0) * CFrame.new(0, -0.5, 0)

	local w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = script.Parent.Frnt_Bdy
	w1.Part0 = w1.Parent
	w1.Part1 = script.Parent.Frnt_Bdy3
	w1.C1 = CFrame.fromEulerAnglesXYZ(0, 14.2, 28.3) * CFrame.new(0, 0.45, 0)

	local w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = script.Parent.Frnt_Bdy2
	w1.Part0 = w1.Parent
	w1.Part1 = script.Parent.Frnt_Bdy4
	w1.C1 = CFrame.fromEulerAnglesXYZ(0, 0, -0.4) * CFrame.new(-1, -0.25, 0)










local w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = script.Parent.BackWheel
	w1.Part0 = w1.Parent
	w1.Part1 = script.Parent.Backwhl.FrontWheel_i1
	w1.C1 = CFrame.fromEulerAnglesXYZ(0, 0, 0) * CFrame.new(0, 0, 0)

	local w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = script.Parent.BackWheel
	w1.Part0 = w1.Parent
	w1.Part1 = script.Parent.Backwhl.Back_Center_BL
	w1.C1 = CFrame.fromEulerAnglesXYZ(0, 0, .78) * CFrame.new(-0.35, -0.35, 0)

	local w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = script.Parent.BackWheel
	w1.Part0 = w1.Parent
	w1.Part1 = script.Parent.Backwhl.Back_Center_BR
	w1.C1 = CFrame.fromEulerAnglesXYZ(0, 0, -0.78) * CFrame.new(0.35, -0.35, 0)

	local w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = script.Parent.BackWheel
	w1.Part0 = w1.Parent
	w1.Part1 = script.Parent.Backwhl.Back_Center_FR
	w1.C1 = CFrame.fromEulerAnglesXYZ(0, 0, -.78) * CFrame.new(-0.35, 0.35, 0)

	local w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = script.Parent.BackWheel
	w1.Part0 = w1.Parent
	w1.Part1 = script.Parent.Backwhl.Back_Center_FL
	w1.C1 = CFrame.fromEulerAnglesXYZ(0, 0, .78) * CFrame.new(0.35, 0.35, 0)


	local w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = script.Parent.BackWheel
	w1.Part0 = w1.Parent
	w1.Part1 = script.Parent.Backwhl.Front_Center
	w1.C1 = CFrame.fromEulerAnglesXYZ(0, 0, 0) * CFrame.new(0, 0, 0)


	local w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = script.Parent.BackWheel
	w1.Part0 = w1.Parent
	w1.Part1 = script.Parent.Backwhl.Front_Center_top
	w1.C1 = CFrame.fromEulerAnglesXYZ(0, 0, 0) * CFrame.new(0, .5, 0)

	local w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = script.Parent.BackWheel
	w1.Part0 = w1.Parent
	w1.Part1 = script.Parent.Backwhl.Front_Center_Bottom
	w1.C1 = CFrame.fromEulerAnglesXYZ(0, 0, 0) * CFrame.new(0, -0.5, 0)

	local w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = script.Parent.BackWheel
	w1.Part0 = w1.Parent
	w1.Part1 = script.Parent.Backwhl.Front_Center_Left
	w1.C1 = CFrame.fromEulerAnglesXYZ(0, 0, 0) * CFrame.new(-0.5, 0, 0)

	local w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = script.Parent.BackWheel
	w1.Part0 = w1.Parent
	w1.Part1 = script.Parent.Backwhl.Front_Center_Right
	w1.C1 = CFrame.fromEulerAnglesXYZ(0, 0, 0) * CFrame.new(0.5, 0, 0)


	local w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = script.Parent.Frnt_Bdy0
	w1.Part0 = w1.Parent
	w1.Part1 = script.Parent.BackWheel
	w1.C1 = CFrame.fromEulerAnglesXYZ(0, 0, 0) * CFrame.new(-1.5, 0.5, 0)






	local w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = script.Parent.Frnt_Bdy0
	w1.Part0 = w1.Parent
	w1.Part1 = script.Parent.Pipe
	w1.C1 = CFrame.fromEulerAnglesXYZ(0, 14, 14.25) * CFrame.new(-1, 0, 0.5)




</ProtectedString>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="IntValue" referent="RBX143">
				<Properties>
					<string name="Name">PlaneCheck</string>
					<int name="Value">0</int>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="IntValue" referent="RBX144">
				<Properties>
					<string name="Name">Stunt</string>
					<int name="Value">0</int>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
	</Item>
</roblox>


