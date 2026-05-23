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
		<Item class="Model" referent="RBX3">
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
				<string name="Name">Station</string>
				<Ref name="PrimaryPart">null</Ref>
				<bool name="archivable">true</bool>
			</Properties>
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
					<string name="Name">Vehicle</string>
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
						<token name="BottomSurface">2</token>
						<token name="BottomSurfaceInput">0</token>
						<int name="BrickColor">23</int>
						<CoordinateFrame name="CFrame">
							<X>-306.476379</X>
							<Y>19.1037598</Y>
							<Z>76.9793701</Z>
							<R00>1</R00>
							<R01>0</R01>
							<R02>0</R02>
							<R10>0</R10>
							<R11>-1</R11>
							<R12>0</R12>
							<R20>0</R20>
							<R21>0</R21>
							<R22>-1</R22>
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
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
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
							<X>1</X>
							<Y>0.800000012</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
					<Item class="SpecialMesh" referent="RBX6">
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
								<X>1</X>
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
				<Item class="Part" referent="RBX7">
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
						<int name="BrickColor">23</int>
						<CoordinateFrame name="CFrame">
							<X>-311.476379</X>
							<Y>19.1037598</Y>
							<Z>75.4793701</Z>
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
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
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
							<X>1</X>
							<Y>1.60000002</Y>
							<Z>2</Z>
						</Vector3>
					</Properties>
					<Item class="SpecialMesh" referent="RBX8">
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
								<X>1</X>
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
				<Item class="Part" referent="RBX9">
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
						<int name="BrickColor">23</int>
						<CoordinateFrame name="CFrame">
							<X>-311.476379</X>
							<Y>19.1037598</Y>
							<Z>76.9793701</Z>
							<R00>1</R00>
							<R01>0</R01>
							<R02>0</R02>
							<R10>0</R10>
							<R11>-1</R11>
							<R12>0</R12>
							<R20>0</R20>
							<R21>0</R21>
							<R22>-1</R22>
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
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
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
							<X>1</X>
							<Y>0.800000012</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
					<Item class="SpecialMesh" referent="RBX10">
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
								<X>1</X>
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
				<Item class="Part" referent="RBX11">
					<Properties>
						<bool name="Anchored">false</bool>
						<float name="BackParamA">-0.5</float>
						<float name="BackParamB">0.5</float>
						<token name="BackSurface">2</token>
						<token name="BackSurfaceInput">0</token>
						<float name="BottomParamA">-0.5</float>
						<float name="BottomParamB">0.5</float>
						<token name="BottomSurface">0</token>
						<token name="BottomSurfaceInput">0</token>
						<int name="BrickColor">23</int>
						<CoordinateFrame name="CFrame">
							<X>-308.976379</X>
							<Y>19.7037601</Y>
							<Z>78.9793701</Z>
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
						<bool name="CanCollide">false</bool>
						<bool name="DraggingV1">false</bool>
						<float name="Elasticity">0</float>
						<token name="FormFactor">1</token>
						<float name="Friction">1</float>
						<float name="FrontParamA">-0.5</float>
						<float name="FrontParamB">0.5</float>
						<token name="FrontSurface">2</token>
						<token name="FrontSurfaceInput">0</token>
						<float name="LeftParamA">-0.5</float>
						<float name="LeftParamB">0.5</float>
						<token name="LeftSurface">0</token>
						<token name="LeftSurfaceInput">0</token>
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Roof</string>
						<float name="Reflectance">0.100000001</float>
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
							<X>6</X>
							<Y>0.400000006</Y>
							<Z>5</Z>
						</Vector3>
					</Properties>
					<Item class="Script" referent="RBX12">
						<Properties>
							<bool name="Disabled">false</bool>
							<Content name="LinkedSource"><null></null></Content>
							<string name="Name">Script</string>
							<ProtectedString name="Source">function onTouched(part)
if part.Name == &quot;Base&quot; then
script.Parent.CanCollide = true
script.Parent.Parent:BreakJoints()
wait(2)
script.Parent.Parent:Remove()
end
end
script.Parent.Touched:connect(onTouched)
</ProtectedString>
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
						<token name="BottomSurface">2</token>
						<token name="BottomSurfaceInput">0</token>
						<int name="BrickColor">21</int>
						<CoordinateFrame name="CFrame">
							<X>-308.976379</X>
							<Y>19.1037598</Y>
							<Z>75.4793701</Z>
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
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.5</float>
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
						<float name="Transparency">0.899999976</float>
						<Vector3 name="Velocity">
							<X>0</X>
							<Y>0</Y>
							<Z>0</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">1</token>
						<Vector3 name="size">
							<X>4</X>
							<Y>1.60000002</Y>
							<Z>2</Z>
						</Vector3>
					</Properties>
					<Item class="SpecialMesh" referent="RBX14">
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
								<X>1</X>
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
				<Item class="Part" referent="RBX15">
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
						<int name="BrickColor">23</int>
						<CoordinateFrame name="CFrame">
							<X>-306.476379</X>
							<Y>19.1037598</Y>
							<Z>75.4793701</Z>
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
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
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
							<X>1</X>
							<Y>1.60000002</Y>
							<Z>2</Z>
						</Vector3>
					</Properties>
					<Item class="SpecialMesh" referent="RBX16">
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
								<X>1</X>
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
				<Item class="Part" referent="RBX17">
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
						<int name="BrickColor">23</int>
						<CoordinateFrame name="CFrame">
							<X>-306.476379</X>
							<Y>18.9037609</Y>
							<Z>80.9793701</Z>
							<R00>-1</R00>
							<R01>0</R01>
							<R02>0</R02>
							<R10>0</R10>
							<R11>-1</R11>
							<R12>0</R12>
							<R20>0</R20>
							<R21>0</R21>
							<R22>1</R22>
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
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
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
							<X>1</X>
							<Y>1.20000005</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
					<Item class="SpecialMesh" referent="RBX18">
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
								<X>1</X>
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
				<Item class="Part" referent="RBX19">
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
						<int name="BrickColor">23</int>
						<CoordinateFrame name="CFrame">
							<X>-306.476379</X>
							<Y>19.1037598</Y>
							<Z>82.4793701</Z>
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
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
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
							<X>1</X>
							<Y>1.60000002</Y>
							<Z>2</Z>
						</Vector3>
					</Properties>
					<Item class="SpecialMesh" referent="RBX20">
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
								<X>1</X>
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
				<Item class="Part" referent="RBX21">
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
						<int name="BrickColor">1001</int>
						<CoordinateFrame name="CFrame">
							<X>-305.476379</X>
							<Y>18.6037598</Y>
							<Z>76.6793747</Z>
							<R00>0</R00>
							<R01>0</R01>
							<R02>1</R02>
							<R10>1</R10>
							<R11>0</R11>
							<R12>0</R12>
							<R20>0</R20>
							<R21>1</R21>
							<R22>0</R22>
						</CoordinateFrame>
						<bool name="CanCollide">false</bool>
						<bool name="DraggingV1">false</bool>
						<float name="Elasticity">0</float>
						<token name="FormFactor">1</token>
						<float name="Friction">1</float>
						<float name="FrontParamA">-0.5</float>
						<float name="FrontParamB">0.5</float>
						<token name="FrontSurface">2</token>
						<token name="FrontSurfaceInput">0</token>
						<float name="LeftParamA">-0.5</float>
						<float name="LeftParamB">0.5</float>
						<token name="LeftSurface">0</token>
						<token name="LeftSurfaceInput">0</token>
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">1</float>
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
							<X>1</X>
							<Y>0.400000006</Y>
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
								<Y>-0.389999986</Y>
								<Z>-0.100000001</Z>
							</Vector3>
							<Vector3 name="Scale">
								<X>0.5</X>
								<Y>1</Y>
								<Z>0.5</Z>
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
						<token name="BackSurface">2</token>
						<token name="BackSurfaceInput">0</token>
						<float name="BottomParamA">-0.5</float>
						<float name="BottomParamB">0.5</float>
						<token name="BottomSurface">0</token>
						<token name="BottomSurfaceInput">0</token>
						<int name="BrickColor">23</int>
						<CoordinateFrame name="CFrame">
							<X>-305.476379</X>
							<Y>18.6037598</Y>
							<Z>76.2793732</Z>
							<R00>0</R00>
							<R01>0</R01>
							<R02>1</R02>
							<R10>1</R10>
							<R11>0</R11>
							<R12>0</R12>
							<R20>0</R20>
							<R21>1</R21>
							<R22>0</R22>
						</CoordinateFrame>
						<bool name="CanCollide">false</bool>
						<bool name="DraggingV1">false</bool>
						<float name="Elasticity">0</float>
						<token name="FormFactor">1</token>
						<float name="Friction">1</float>
						<float name="FrontParamA">-0.5</float>
						<float name="FrontParamB">0.5</float>
						<token name="FrontSurface">2</token>
						<token name="FrontSurfaceInput">0</token>
						<float name="LeftParamA">-0.5</float>
						<float name="LeftParamB">0.5</float>
						<token name="LeftSurface">0</token>
						<token name="LeftSurfaceInput">0</token>
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
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
							<X>1</X>
							<Y>0.400000006</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
					<Item class="BlockMesh" referent="RBX24">
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
								<Z>-0.200000003</Z>
							</Vector3>
							<Vector3 name="Scale">
								<X>0.600000024</X>
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
						<int name="BrickColor">23</int>
						<CoordinateFrame name="CFrame">
							<X>-308.976379</X>
							<Y>18.1037598</Y>
							<Z>73.4793701</Z>
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
						<bool name="CanCollide">true</bool>
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
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
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
							<X>6</X>
							<Y>0.400000006</Y>
							<Z>4</Z>
						</Vector3>
					</Properties>
				</Item>
				<Item class="Part" referent="RBX26">
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
						<int name="BrickColor">1001</int>
						<CoordinateFrame name="CFrame">
							<X>-312.476379</X>
							<Y>18.6037598</Y>
							<Z>76.6793747</Z>
							<R00>0</R00>
							<R01>0</R01>
							<R02>1</R02>
							<R10>1</R10>
							<R11>0</R11>
							<R12>0</R12>
							<R20>0</R20>
							<R21>1</R21>
							<R22>0</R22>
						</CoordinateFrame>
						<bool name="CanCollide">false</bool>
						<bool name="DraggingV1">false</bool>
						<float name="Elasticity">0</float>
						<token name="FormFactor">1</token>
						<float name="Friction">1</float>
						<float name="FrontParamA">-0.5</float>
						<float name="FrontParamB">0.5</float>
						<token name="FrontSurface">2</token>
						<token name="FrontSurfaceInput">0</token>
						<float name="LeftParamA">-0.5</float>
						<float name="LeftParamB">0.5</float>
						<token name="LeftSurface">0</token>
						<token name="LeftSurfaceInput">0</token>
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">1</float>
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
							<X>1</X>
							<Y>0.400000006</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
					<Item class="BlockMesh" referent="RBX27">
						<Properties>
							<float name="Bevel">0</float>
							<float name="Bevel Roundness">0</float>
							<float name="Bulge">0</float>
							<token name="LODX">2</token>
							<token name="LODY">2</token>
							<string name="Name">Mesh</string>
							<Vector3 name="Offset">
								<X>0</X>
								<Y>-0.389999986</Y>
								<Z>0.100000001</Z>
							</Vector3>
							<Vector3 name="Scale">
								<X>0.5</X>
								<Y>1</Y>
								<Z>0.5</Z>
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
				<Item class="Part" referent="RBX28">
					<Properties>
						<bool name="Anchored">false</bool>
						<float name="BackParamA">-0.5</float>
						<float name="BackParamB">0.5</float>
						<token name="BackSurface">2</token>
						<token name="BackSurfaceInput">0</token>
						<float name="BottomParamA">-0.5</float>
						<float name="BottomParamB">0.5</float>
						<token name="BottomSurface">0</token>
						<token name="BottomSurfaceInput">0</token>
						<int name="BrickColor">23</int>
						<CoordinateFrame name="CFrame">
							<X>-312.476379</X>
							<Y>18.6037598</Y>
							<Z>76.2793732</Z>
							<R00>0</R00>
							<R01>0</R01>
							<R02>1</R02>
							<R10>1</R10>
							<R11>0</R11>
							<R12>0</R12>
							<R20>0</R20>
							<R21>1</R21>
							<R22>0</R22>
						</CoordinateFrame>
						<bool name="CanCollide">false</bool>
						<bool name="DraggingV1">false</bool>
						<float name="Elasticity">0</float>
						<token name="FormFactor">1</token>
						<float name="Friction">1</float>
						<float name="FrontParamA">-0.5</float>
						<float name="FrontParamB">0.5</float>
						<token name="FrontSurface">2</token>
						<token name="FrontSurfaceInput">0</token>
						<float name="LeftParamA">-0.5</float>
						<float name="LeftParamB">0.5</float>
						<token name="LeftSurface">0</token>
						<token name="LeftSurfaceInput">0</token>
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
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
							<X>1</X>
							<Y>0.400000006</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
					<Item class="BlockMesh" referent="RBX29">
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
								<Z>0.200000003</Z>
							</Vector3>
							<Vector3 name="Scale">
								<X>0.600000024</X>
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
				<Item class="Part" referent="RBX30">
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
						<int name="BrickColor">23</int>
						<CoordinateFrame name="CFrame">
							<X>-311.476379</X>
							<Y>18.9037609</Y>
							<Z>80.9793701</Z>
							<R00>-1</R00>
							<R01>0</R01>
							<R02>0</R02>
							<R10>0</R10>
							<R11>-1</R11>
							<R12>0</R12>
							<R20>0</R20>
							<R21>0</R21>
							<R22>1</R22>
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
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
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
							<X>1</X>
							<Y>1.20000005</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
					<Item class="SpecialMesh" referent="RBX31">
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
								<X>1</X>
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
				<Item class="Part" referent="RBX32">
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
						<int name="BrickColor">21</int>
						<CoordinateFrame name="CFrame">
							<X>-308.976379</X>
							<Y>19.1037598</Y>
							<Z>82.4793701</Z>
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
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.5</float>
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
						<float name="Transparency">0.899999976</float>
						<Vector3 name="Velocity">
							<X>0</X>
							<Y>0</Y>
							<Z>0</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">1</token>
						<Vector3 name="size">
							<X>4</X>
							<Y>1.60000002</Y>
							<Z>2</Z>
						</Vector3>
					</Properties>
					<Item class="SpecialMesh" referent="RBX33">
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
								<X>1</X>
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
				<Item class="Part" referent="RBX34">
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
						<int name="BrickColor">23</int>
						<CoordinateFrame name="CFrame">
							<X>-311.476379</X>
							<Y>19.1037598</Y>
							<Z>82.4793701</Z>
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
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
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
							<X>1</X>
							<Y>1.60000002</Y>
							<Z>2</Z>
						</Vector3>
					</Properties>
					<Item class="SpecialMesh" referent="RBX35">
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
								<X>1</X>
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
				<Item class="Part" referent="RBX36">
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
						<int name="BrickColor">23</int>
						<CoordinateFrame name="CFrame">
							<X>-306.476379</X>
							<Y>17.7037601</Y>
							<Z>77.9793701</Z>
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
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
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
							<X>1</X>
							<Y>1.20000005</Y>
							<Z>5</Z>
						</Vector3>
					</Properties>
					<Item class="BlockMesh" referent="RBX37">
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
								<X>1.005</X>
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
				<Item class="Part" referent="RBX38">
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
						<int name="BrickColor">26</int>
						<CoordinateFrame name="CFrame">
							<X>-308.976379</X>
							<Y>17.9037609</Y>
							<Z>79.9793701</Z>
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
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
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
							<X>4</X>
							<Y>1.60000002</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
				</Item>
				<Item class="Part" referent="RBX39">
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
						<int name="BrickColor">23</int>
						<CoordinateFrame name="CFrame">
							<X>-308.976379</X>
							<Y>17.3037605</Y>
							<Z>84.4793701</Z>
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
						<bool name="CanCollide">true</bool>
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
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
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
						<token name="TopSurface">2</token>
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
							<X>6</X>
							<Y>1.20000005</Y>
							<Z>2</Z>
						</Vector3>
					</Properties>
				</Item>
				<Item class="Part" referent="RBX40">
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
							<X>-308.976379</X>
							<Y>18.1037598</Y>
							<Z>82.9793701</Z>
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
						<bool name="CanCollide">true</bool>
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
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
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
							<X>6</X>
							<Y>0.400000006</Y>
							<Z>5</Z>
						</Vector3>
					</Properties>
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
						<token name="BottomSurface">2</token>
						<token name="BottomSurfaceInput">0</token>
						<int name="BrickColor">23</int>
						<CoordinateFrame name="CFrame">
							<X>-308.976379</X>
							<Y>17.5037594</Y>
							<Z>82.4793701</Z>
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
						<bool name="CanCollide">true</bool>
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
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
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
						<token name="TopSurface">2</token>
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
							<Y>0.800000012</Y>
							<Z>2</Z>
						</Vector3>
					</Properties>
				</Item>
				<Item class="Part" referent="RBX42">
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
						<int name="BrickColor">23</int>
						<CoordinateFrame name="CFrame">
							<X>-310.976379</X>
							<Y>16.7037601</Y>
							<Z>77.9793701</Z>
							<R00>0</R00>
							<R01>0</R01>
							<R02>1</R02>
							<R10>0</R10>
							<R11>-1</R11>
							<R12>0</R12>
							<R20>1</R20>
							<R21>0</R21>
							<R22>0</R22>
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
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
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
							<X>7</X>
							<Y>0.800000012</Y>
							<Z>2</Z>
						</Vector3>
					</Properties>
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
						<token name="BottomSurface">2</token>
						<token name="BottomSurfaceInput">0</token>
						<int name="BrickColor">106</int>
						<CoordinateFrame name="CFrame">
							<X>-306.476379</X>
							<Y>17.4037609</Y>
							<Z>71.2793732</Z>
							<R00>1</R00>
							<R01>0</R01>
							<R02>0</R02>
							<R10>0</R10>
							<R11>0</R11>
							<R12>1</R12>
							<R20>0</R20>
							<R21>-1</R21>
							<R22>0</R22>
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
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">fr</string>
						<float name="Reflectance">0.300000012</float>
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
						<float name="Transparency">0.100000001</float>
						<Vector3 name="Velocity">
							<X>0</X>
							<Y>0</Y>
							<Z>0</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">1</token>
						<Vector3 name="size">
							<X>1</X>
							<Y>0.400000006</Y>
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
								<X>-0.200000003</X>
								<Y>-0.349999994</Y>
								<Z>0</Z>
							</Vector3>
							<Vector3 name="Scale">
								<X>1.5</X>
								<Y>1</Y>
								<Z>0.699999988</Z>
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
						<token name="BottomSurface">2</token>
						<token name="BottomSurfaceInput">0</token>
						<int name="BrickColor">1003</int>
						<CoordinateFrame name="CFrame">
							<X>-308.976379</X>
							<Y>17.8037605</Y>
							<Z>76.4793701</Z>
							<R00>1</R00>
							<R01>0</R01>
							<R02>0</R02>
							<R10>0</R10>
							<R11>0</R11>
							<R12>-1</R12>
							<R20>0</R20>
							<R21>1</R21>
							<R22>0</R22>
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
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
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
							<Y>0.800000012</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
					<Item class="CylinderMesh" referent="RBX46">
						<Properties>
							<float name="Bevel">0</float>
							<float name="Bevel Roundness">0</float>
							<float name="Bulge">0</float>
							<token name="LODX">2</token>
							<token name="LODY">2</token>
							<string name="Name">Mesh</string>
							<Vector3 name="Offset">
								<X>0</X>
								<Y>-0.5</Y>
								<Z>0</Z>
							</Vector3>
							<Vector3 name="Scale">
								<X>0.5</X>
								<Y>1.5</Y>
								<Z>0.5</Z>
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
				<Item class="Part" referent="RBX47">
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
						<int name="BrickColor">23</int>
						<CoordinateFrame name="CFrame">
							<X>-311.476379</X>
							<Y>17.7037601</Y>
							<Z>77.9793701</Z>
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
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
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
							<X>1</X>
							<Y>1.20000005</Y>
							<Z>5</Z>
						</Vector3>
					</Properties>
					<Item class="BlockMesh" referent="RBX48">
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
								<X>1.005</X>
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
				<Item class="Part" referent="RBX49">
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
						<int name="BrickColor">1003</int>
						<CoordinateFrame name="CFrame">
							<X>-308.976379</X>
							<Y>17.8037605</Y>
							<Z>77.0793686</Z>
							<R00>1</R00>
							<R01>0</R01>
							<R02>0</R02>
							<R10>0</R10>
							<R11>0</R11>
							<R12>-1</R12>
							<R20>0</R20>
							<R21>1</R21>
							<R22>0</R22>
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
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
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
							<Z>1</Z>
						</Vector3>
					</Properties>
					<Item class="CylinderMesh" referent="RBX50">
						<Properties>
							<float name="Bevel">0</float>
							<float name="Bevel Roundness">0</float>
							<float name="Bulge">0</float>
							<token name="LODX">2</token>
							<token name="LODY">2</token>
							<string name="Name">Mesh</string>
							<Vector3 name="Offset">
								<X>0</X>
								<Y>-0.5</Y>
								<Z>0</Z>
							</Vector3>
							<Vector3 name="Scale">
								<X>1.5</X>
								<Y>0.5</Y>
								<Z>1.5</Z>
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
				<Item class="Part" referent="RBX51">
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
						<int name="BrickColor">23</int>
						<CoordinateFrame name="CFrame">
							<X>-308.976379</X>
							<Y>17.3037605</Y>
							<Z>71.9793701</Z>
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
						<bool name="CanCollide">true</bool>
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
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
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
						<token name="TopSurface">2</token>
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
							<X>6</X>
							<Y>1.20000005</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
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
						<int name="BrickColor">23</int>
						<CoordinateFrame name="CFrame">
							<X>-308.976379</X>
							<Y>17.5037594</Y>
							<Z>73.4793701</Z>
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
						<bool name="CanCollide">true</bool>
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
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
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
						<token name="TopSurface">2</token>
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
							<Y>0.800000012</Y>
							<Z>2</Z>
						</Vector3>
					</Properties>
				</Item>
				<Item class="Part" referent="RBX53">
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
						<int name="BrickColor">23</int>
						<CoordinateFrame name="CFrame">
							<X>-308.976379</X>
							<Y>17.5037594</Y>
							<Z>80.9793701</Z>
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
						<bool name="CanCollide">true</bool>
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
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
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
						<token name="TopSurface">2</token>
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
							<X>6</X>
							<Y>0.800000012</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
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
						<token name="BottomSurface">2</token>
						<token name="BottomSurfaceInput">0</token>
						<int name="BrickColor">23</int>
						<CoordinateFrame name="CFrame">
							<X>-308.976379</X>
							<Y>17.5037594</Y>
							<Z>74.9793701</Z>
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
						<bool name="CanCollide">true</bool>
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
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
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
						<token name="TopSurface">2</token>
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
							<X>6</X>
							<Y>0.800000012</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
				</Item>
				<Item class="Part" referent="RBX55">
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
						<int name="BrickColor">106</int>
						<CoordinateFrame name="CFrame">
							<X>-311.476379</X>
							<Y>17.6037598</Y>
							<Z>85.6793671</Z>
							<R00>-1</R00>
							<R01>0</R01>
							<R02>0</R02>
							<R10>0</R10>
							<R11>0</R11>
							<R12>1</R12>
							<R20>0</R20>
							<R21>1</R21>
							<R22>0</R22>
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
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">bl</string>
						<float name="Reflectance">0.300000012</float>
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
						<float name="Transparency">0.100000001</float>
						<Vector3 name="Velocity">
							<X>0</X>
							<Y>0</Y>
							<Z>0</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">1</token>
						<Vector3 name="size">
							<X>1</X>
							<Y>0.400000006</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
					<Item class="BlockMesh" referent="RBX56">
						<Properties>
							<float name="Bevel">0</float>
							<float name="Bevel Roundness">0</float>
							<float name="Bulge">0</float>
							<token name="LODX">2</token>
							<token name="LODY">2</token>
							<string name="Name">Mesh</string>
							<Vector3 name="Offset">
								<X>-0.200000003</X>
								<Y>-0.349999994</Y>
								<Z>0</Z>
							</Vector3>
							<Vector3 name="Scale">
								<X>1.5</X>
								<Y>1</Y>
								<Z>0.699999988</Z>
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
				<Item class="VehicleSeat" referent="RBX57">
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
						<int name="BrickColor">21</int>
						<CoordinateFrame name="CFrame">
							<X>-308.976379</X>
							<Y>15.40376</Y>
							<Z>77.9793701</Z>
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
						<bool name="CanCollide">false</bool>
						<bool name="DraggingV1">false</bool>
						<float name="Elasticity">0</float>
						<float name="Friction">1</float>
						<float name="FrontParamA">-0.5</float>
						<float name="FrontParamB">0.5</float>
						<token name="FrontSurface">0</token>
						<token name="FrontSurfaceInput">0</token>
						<bool name="HeadsUpDisplay">false</bool>
						<float name="LeftParamA">-0.5</float>
						<float name="LeftParamB">0.5</float>
						<token name="LeftSurface">0</token>
						<token name="LeftSurfaceInput">0</token>
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<float name="MaxSpeed">40</float>
						<string name="Name">VehicleSeat</string>
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
						<int name="Steer">0</int>
						<int name="Throttle">0</int>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">2</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Torque">6</float>
						<float name="Transparency">1</float>
						<float name="TurnSpeed">5</float>
						<Vector3 name="Velocity">
							<X>0</X>
							<Y>0</Y>
							<Z>0</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<Vector3 name="size">
							<X>6</X>
							<Y>1</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
					<Item class="Script" referent="RBX58">
						<Properties>
							<bool name="Disabled">false</bool>
							<Content name="LinkedSource"><null></null></Content>
							<string name="Name">OwnIt</string>
							<ProtectedString name="Source">function onTouched(part)
local h = part.Parent:FindFirstChild(&quot;Humanoid&quot;)
if (h ~= nil) then
script.Parent.Parent.Parent = h.Parent
end
end
script.Parent.Touched:connect(onTouched)
</ProtectedString>
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
						<token name="BottomSurface">2</token>
						<token name="BottomSurfaceInput">0</token>
						<int name="BrickColor">106</int>
						<CoordinateFrame name="CFrame">
							<X>-311.476379</X>
							<Y>17.4037609</Y>
							<Z>71.2793732</Z>
							<R00>1</R00>
							<R01>0</R01>
							<R02>0</R02>
							<R10>0</R10>
							<R11>0</R11>
							<R12>1</R12>
							<R20>0</R20>
							<R21>-1</R21>
							<R22>0</R22>
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
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">fl</string>
						<float name="Reflectance">0.300000012</float>
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
						<float name="Transparency">0.100000001</float>
						<Vector3 name="Velocity">
							<X>0</X>
							<Y>0</Y>
							<Z>0</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">1</token>
						<Vector3 name="size">
							<X>1</X>
							<Y>0.400000006</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
					<Item class="BlockMesh" referent="RBX60">
						<Properties>
							<float name="Bevel">0</float>
							<float name="Bevel Roundness">0</float>
							<float name="Bulge">0</float>
							<token name="LODX">2</token>
							<token name="LODY">2</token>
							<string name="Name">Mesh</string>
							<Vector3 name="Offset">
								<X>0.200000003</X>
								<Y>-0.349999994</Y>
								<Z>0</Z>
							</Vector3>
							<Vector3 name="Scale">
								<X>1.5</X>
								<Y>1</Y>
								<Z>0.699999988</Z>
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
				<Item class="Part" referent="RBX61">
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
						<int name="BrickColor">106</int>
						<CoordinateFrame name="CFrame">
							<X>-306.476379</X>
							<Y>17.6037598</Y>
							<Z>85.6793671</Z>
							<R00>-1</R00>
							<R01>0</R01>
							<R02>0</R02>
							<R10>0</R10>
							<R11>0</R11>
							<R12>1</R12>
							<R20>0</R20>
							<R21>1</R21>
							<R22>0</R22>
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
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">br</string>
						<float name="Reflectance">0.300000012</float>
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
						<float name="Transparency">0.100000001</float>
						<Vector3 name="Velocity">
							<X>0</X>
							<Y>0</Y>
							<Z>0</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">1</token>
						<Vector3 name="size">
							<X>1</X>
							<Y>0.400000006</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
					<Item class="BlockMesh" referent="RBX62">
						<Properties>
							<float name="Bevel">0</float>
							<float name="Bevel Roundness">0</float>
							<float name="Bulge">0</float>
							<token name="LODX">2</token>
							<token name="LODY">2</token>
							<string name="Name">Mesh</string>
							<Vector3 name="Offset">
								<X>0.200000003</X>
								<Y>-0.349999994</Y>
								<Z>0</Z>
							</Vector3>
							<Vector3 name="Scale">
								<X>1.5</X>
								<Y>1</Y>
								<Z>0.699999988</Z>
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
				<Item class="Part" referent="RBX63">
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
							<X>-308.976379</X>
							<Y>16.5037594</Y>
							<Z>84.4793701</Z>
							<R00>1</R00>
							<R01>0</R01>
							<R02>0</R02>
							<R10>0</R10>
							<R11>-1</R11>
							<R12>0</R12>
							<R20>0</R20>
							<R21>0</R21>
							<R22>-1</R22>
						</CoordinateFrame>
						<bool name="CanCollide">true</bool>
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
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
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
							<X>6</X>
							<Y>0.400000006</Y>
							<Z>2</Z>
						</Vector3>
					</Properties>
					<Item class="SpecialMesh" referent="RBX64">
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
								<X>1</X>
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
				<Item class="Part" referent="RBX65">
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
						<int name="BrickColor">1003</int>
						<CoordinateFrame name="CFrame">
							<X>-306.976379</X>
							<Y>16.5046997</Y>
							<Z>73.4793701</Z>
							<R00>0.00245491136</R00>
							<R01>-0.999996126</R01>
							<R02>0.000907168549</R02>
							<R10>-0.926455438</R10>
							<R11>-0.00261568162</R11>
							<R12>-0.376394719</R12>
							<R20>0.376396</R20>
							<R21>8.30226199e-005</R21>
							<R22>-0.926458418</R22>
						</CoordinateFrame>
						<bool name="CanCollide">true</bool>
						<bool name="DraggingV1">false</bool>
						<float name="Elasticity">0</float>
						<token name="FormFactor">0</token>
						<float name="Friction">1</float>
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
						<string name="Name">Tire</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.0769212618</X>
							<Y>-0.054177206</Y>
							<Z>0.242663711</Z>
						</Vector3>
						<float name="TopParamA">0</float>
						<float name="TopParamB">0</float>
						<token name="TopSurface">6</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0.0180569291</X>
							<Y>0.0298195183</Y>
							<Z>-0.0428404883</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">0</token>
						<Vector3 name="size">
							<X>2</X>
							<Y>2</Y>
							<Z>2</Z>
						</Vector3>
					</Properties>
					<Item class="CylinderMesh" referent="RBX66">
						<Properties>
							<float name="Bevel">0</float>
							<float name="Bevel Roundness">0</float>
							<float name="Bulge">0</float>
							<token name="LODX">2</token>
							<token name="LODY">2</token>
							<string name="Name">Mesh</string>
							<Vector3 name="Offset">
								<X>0</X>
								<Y>-0.600000024</Y>
								<Z>0</Z>
							</Vector3>
							<Vector3 name="Scale">
								<X>1</X>
								<Y>0.5</Y>
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
					<Item class="Decal" referent="RBX67">
						<Properties>
							<token name="Face">4</token>
							<string name="Name">Decal</string>
							<float name="Shiny">20</float>
							<float name="Specular">0</float>
							<Content name="Texture"><url>http://polygondev.pizzaboxer.xyz/asset/?id=46497811</url></Content>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
				<Item class="Part" referent="RBX68">
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
						<int name="BrickColor">23</int>
						<CoordinateFrame name="CFrame">
							<X>-306.976379</X>
							<Y>16.7037601</Y>
							<Z>77.9793701</Z>
							<R00>-0</R00>
							<R01>-0</R01>
							<R02>-1</R02>
							<R10>-0</R10>
							<R11>-1</R11>
							<R12>-0</R12>
							<R20>-1</R20>
							<R21>-0</R21>
							<R22>-0</R22>
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
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
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
							<X>7</X>
							<Y>0.800000012</Y>
							<Z>2</Z>
						</Vector3>
					</Properties>
				</Item>
				<Item class="Part" referent="RBX69">
					<Properties>
						<bool name="Anchored">false</bool>
						<float name="BackParamA">-0.5</float>
						<float name="BackParamB">0.5</float>
						<token name="BackSurface">2</token>
						<token name="BackSurfaceInput">0</token>
						<float name="BottomParamA">-0.5</float>
						<float name="BottomParamB">0.5</float>
						<token name="BottomSurface">0</token>
						<token name="BottomSurfaceInput">0</token>
						<int name="BrickColor">23</int>
						<CoordinateFrame name="CFrame">
							<X>-308.976379</X>
							<Y>16.7037601</Y>
							<Z>78.4793701</Z>
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
						<bool name="CanCollide">false</bool>
						<bool name="DraggingV1">false</bool>
						<float name="Elasticity">0</float>
						<token name="FormFactor">1</token>
						<float name="Friction">1</float>
						<float name="FrontParamA">-0.5</float>
						<float name="FrontParamB">0.5</float>
						<token name="FrontSurface">2</token>
						<token name="FrontSurfaceInput">0</token>
						<float name="LeftParamA">-0.5</float>
						<float name="LeftParamB">0.5</float>
						<token name="LeftSurface">0</token>
						<token name="LeftSurfaceInput">0</token>
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
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
							<Y>0.800000012</Y>
							<Z>10</Z>
						</Vector3>
					</Properties>
				</Item>
				<Item class="Part" referent="RBX70">
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
						<int name="BrickColor">1003</int>
						<CoordinateFrame name="CFrame">
							<X>-310.976379</X>
							<Y>16.5073853</Y>
							<Z>82.4793701</Z>
							<R00>-0.0034917274</R00>
							<R01>0.999992609</R01>
							<R02>-0.00141729531</R02>
							<R10>-0.930062056</R10>
							<R11>-0.00376830832</R11>
							<R12>-0.367382616</R12>
							<R20>-0.367385119</R20>
							<R21>3.56698874e-005</R21>
							<R22>0.930068612</R22>
						</CoordinateFrame>
						<bool name="CanCollide">true</bool>
						<bool name="DraggingV1">false</bool>
						<float name="Elasticity">0</float>
						<token name="FormFactor">0</token>
						<float name="Friction">1</float>
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
						<string name="Name">Tire</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>0.0540195033</X>
							<Y>-0.0826129839</Y>
							<Z>0.306645542</Z>
						</Vector3>
						<float name="TopParamA">0</float>
						<float name="TopParamB">0</float>
						<token name="TopSurface">6</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>-0.100726135</X>
							<Y>-0.000750005245</Y>
							<Z>-0.173584342</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">0</token>
						<Vector3 name="size">
							<X>2</X>
							<Y>2</Y>
							<Z>2</Z>
						</Vector3>
					</Properties>
					<Item class="CylinderMesh" referent="RBX71">
						<Properties>
							<float name="Bevel">0</float>
							<float name="Bevel Roundness">0</float>
							<float name="Bulge">0</float>
							<token name="LODX">2</token>
							<token name="LODY">2</token>
							<string name="Name">Mesh</string>
							<Vector3 name="Offset">
								<X>0</X>
								<Y>-0.600000024</Y>
								<Z>0</Z>
							</Vector3>
							<Vector3 name="Scale">
								<X>1</X>
								<Y>0.5</Y>
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
					<Item class="Decal" referent="RBX72">
						<Properties>
							<token name="Face">4</token>
							<string name="Name">Decal</string>
							<float name="Shiny">20</float>
							<float name="Specular">0</float>
							<Content name="Texture"><url>http://polygondev.pizzaboxer.xyz/asset/?id=46497811</url></Content>
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
						<int name="BrickColor">1003</int>
						<CoordinateFrame name="CFrame">
							<X>-306.976379</X>
							<Y>16.5056763</Y>
							<Z>82.4793701</Z>
							<R00>0.00312140328</R00>
							<R01>-0.999994636</R01>
							<R02>-0.000493956497</R02>
							<R10>-0.982805073</R10>
							<R11>-0.00315871765</R11>
							<R12>0.184616953</R12>
							<R20>-0.184617221</R20>
							<R21>-9.12586547e-005</R21>
							<R22>-0.98281002</R22>
						</CoordinateFrame>
						<bool name="CanCollide">true</bool>
						<bool name="DraggingV1">false</bool>
						<float name="Elasticity">0</float>
						<token name="FormFactor">0</token>
						<float name="Friction">1</float>
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
						<string name="Name">Tire</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.0220302604</X>
							<Y>0.0152277881</Y>
							<Z>0.308603883</Z>
						</Vector3>
						<float name="TopParamA">0</float>
						<float name="TopParamB">0</float>
						<token name="TopSurface">6</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0.118444636</X>
							<Y>0.109587789</Y>
							<Z>0.240123376</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">0</token>
						<Vector3 name="size">
							<X>2</X>
							<Y>2</Y>
							<Z>2</Z>
						</Vector3>
					</Properties>
					<Item class="CylinderMesh" referent="RBX74">
						<Properties>
							<float name="Bevel">0</float>
							<float name="Bevel Roundness">0</float>
							<float name="Bulge">0</float>
							<token name="LODX">2</token>
							<token name="LODY">2</token>
							<string name="Name">Mesh</string>
							<Vector3 name="Offset">
								<X>0</X>
								<Y>-0.600000024</Y>
								<Z>0</Z>
							</Vector3>
							<Vector3 name="Scale">
								<X>1</X>
								<Y>0.5</Y>
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
					<Item class="Decal" referent="RBX75">
						<Properties>
							<token name="Face">4</token>
							<string name="Name">Decal</string>
							<float name="Shiny">20</float>
							<float name="Specular">0</float>
							<Content name="Texture"><url>http://polygondev.pizzaboxer.xyz/asset/?id=46497811</url></Content>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
				<Item class="Part" referent="RBX76">
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
						<int name="BrickColor">1003</int>
						<CoordinateFrame name="CFrame">
							<X>-310.976379</X>
							<Y>16.5046997</Y>
							<Z>73.4793701</Z>
							<R00>-0.00234823348</R00>
							<R01>0.999996603</R01>
							<R02>0.000777128735</R02>
							<R10>-0.961041391</R10>
							<R11>-0.0024715811</R11>
							<R12>0.276392937</R12>
							<R20>0.276394218</R20>
							<R21>-9.74764116e-005</R21>
							<R22>0.961043894</R22>
						</CoordinateFrame>
						<bool name="CanCollide">true</bool>
						<bool name="DraggingV1">false</bool>
						<float name="Elasticity">0</float>
						<token name="FormFactor">0</token>
						<float name="Friction">1</float>
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
						<string name="Name">Tire</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>0.0393180251</X>
							<Y>-0.00715502026</Y>
							<Z>-0.0125421397</Z>
						</Vector3>
						<float name="TopParamA">0</float>
						<float name="TopParamB">0</float>
						<token name="TopSurface">6</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0.051303193</X>
							<Y>-0.010324643</Y>
							<Z>-0.121654175</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">0</token>
						<Vector3 name="size">
							<X>2</X>
							<Y>2</Y>
							<Z>2</Z>
						</Vector3>
					</Properties>
					<Item class="CylinderMesh" referent="RBX77">
						<Properties>
							<float name="Bevel">0</float>
							<float name="Bevel Roundness">0</float>
							<float name="Bulge">0</float>
							<token name="LODX">2</token>
							<token name="LODY">2</token>
							<string name="Name">Mesh</string>
							<Vector3 name="Offset">
								<X>0</X>
								<Y>-0.600000024</Y>
								<Z>0</Z>
							</Vector3>
							<Vector3 name="Scale">
								<X>1</X>
								<Y>0.5</Y>
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
					<Item class="Decal" referent="RBX78">
						<Properties>
							<token name="Face">4</token>
							<string name="Name">Decal</string>
							<float name="Shiny">20</float>
							<float name="Specular">0</float>
							<Content name="Texture"><url>http://polygondev.pizzaboxer.xyz/asset/?id=46497811</url></Content>
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
						<int name="BrickColor">23</int>
						<CoordinateFrame name="CFrame">
							<X>-308.976379</X>
							<Y>16.5037613</Y>
							<Z>71.9793701</Z>
							<R00>-1</R00>
							<R01>0</R01>
							<R02>0</R02>
							<R10>0</R10>
							<R11>-1</R11>
							<R12>0</R12>
							<R20>0</R20>
							<R21>0</R21>
							<R22>1</R22>
						</CoordinateFrame>
						<bool name="CanCollide">true</bool>
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
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
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
							<X>6</X>
							<Y>0.400000006</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
					<Item class="SpecialMesh" referent="RBX80">
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
								<X>1</X>
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
							<X>-308.976379</X>
							<Y>16.1037598</Y>
							<Z>78.4793701</Z>
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
						<bool name="Locked">false</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
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
						<token name="TopSurface">2</token>
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
							<X>3</X>
							<Y>0.400000006</Y>
							<Z>5</Z>
						</Vector3>
					</Properties>
				</Item>
			</Item>
		</Item>
		<Item class="Part" referent="RBX82">
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
					<X>-300</X>
					<Y>15.1000004</Y>
					<Z>77</Z>
					<R00>-1</R00>
					<R01>0</R01>
					<R02>-0</R02>
					<R10>-0</R10>
					<R11>1</R11>
					<R12>-0</R12>
					<R20>-0</R20>
					<R21>0</R21>
					<R22>-1</R22>
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
				<bool name="Locked">false</bool>
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
			<Item class="Script" referent="RBX83">
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
			<Item class="CylinderMesh" referent="RBX84">
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
		<Item class="Model" referent="RBX85">
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
			<Item class="Part" referent="RBX86">
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
						<X>-300</X>
						<Y>15.5</Y>
						<Z>77</Z>
						<R00>-0</R00>
						<R01>0</R01>
						<R02>1</R02>
						<R10>-0</R10>
						<R11>1</R11>
						<R12>0</R12>
						<R20>-1</R20>
						<R21>0</R21>
						<R22>0</R22>
					</CoordinateFrame>
					<bool name="CanCollide">false</bool>
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
					<bool name="Locked">false</bool>
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
			<Item class="Humanoid" referent="RBX87">
				<Properties>
					<float name="Health">0</float>
					<float name="MaxHealth">0</float>
					<string name="Name">Humanoid</string>
					<float name="WalkSpeed">0</float>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Script" referent="RBX88">
			<Properties>
				<bool name="Disabled">false</bool>
				<Content name="LinkedSource"><null></null></Content>
				<string name="Name">Remover</string>
				<ProtectedString name="Source">wait(.1)
script.Parent.Station:Remove()
wait(.1)
script:Remove()
</ProtectedString>
				<bool name="archivable">true</bool>
			</Properties>
		</Item>
	</Item>
</roblox>


