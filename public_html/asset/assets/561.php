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
							<X>31.5914822</X>
							<Y>43.868679</Y>
							<Z>-0.82505393</Z>
							<R00>0.999933124</R00>
							<R01>0.000163880613</R01>
							<R02>-0.0115660205</R02>
							<R10>0.000173735054</R10>
							<R11>-0.999999642</R11>
							<R12>0.00085101719</R12>
							<R20>-0.0115658771</R20>
							<R21>-0.000852969708</R21>
							<R22>-0.999932766</R22>
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
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0.102856189</X>
							<Y>0.065643549</Y>
							<Z>0.0169864185</Z>
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
							<X>26.5744667</X>
							<Y>43.8690872</Y>
							<Z>-2.2671237</Z>
							<R00>0.999933124</R00>
							<R01>-0.000163880613</R01>
							<R02>0.0115660205</R02>
							<R10>0.000173735054</R10>
							<R11>0.999999642</R11>
							<R12>-0.00085101719</R12>
							<R20>-0.0115658771</R20>
							<R21>0.000852969708</R21>
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
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0.116790019</X>
							<Y>-0.0215844475</Y>
							<Z>-0.0315145925</Z>
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
							<X>26.5918159</X>
							<Y>43.8678093</Y>
							<Z>-0.767224431</Z>
							<R00>0.999933124</R00>
							<R01>0.000163880613</R01>
							<R02>-0.0115660205</R02>
							<R10>0.000173735054</R10>
							<R11>-0.999999642</R11>
							<R12>0.00085101719</R12>
							<R20>-0.0115658771</R20>
							<R21>-0.000852969708</R21>
							<R22>-0.999932766</R22>
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
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0.102311194</X>
							<Y>-0.0147957839</Y>
							<Z>-0.0313413329</Z>
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
							<X>29.1146832</X>
							<Y>44.4665413</Y>
							<Z>1.20423818</Z>
							<R00>0.999933124</R00>
							<R01>-0.000163880613</R01>
							<R02>0.0115660205</R02>
							<R10>0.000173735054</R10>
							<R11>0.999999642</R11>
							<R12>-0.00085101719</R12>
							<R20>-0.0115658771</R20>
							<R21>0.000852969708</R21>
							<R22>0.999932766</R22>
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
						<bool name="Locked">true</bool>
						<token name="Material">256</token>
						<string name="Name">Roof</string>
						<float name="Reflectance">0.100000001</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0.0735901445</X>
							<Y>0.0344760679</Y>
							<Z>-0.0095510371</Z>
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
							<X>29.0743008</X>
							<Y>43.8695183</Y>
							<Z>-2.29603839</Z>
							<R00>0.999933124</R00>
							<R01>-0.000163880613</R01>
							<R02>0.0115660205</R02>
							<R10>0.000173735054</R10>
							<R11>0.999999642</R11>
							<R12>-0.00085101719</R12>
							<R20>-0.0115658771</R20>
							<R21>0.000852969708</R21>
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
						<string name="Name">Part</string>
						<float name="Reflectance">0.5</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0.899999976</float>
						<Vector3 name="Velocity">
							<X>0.117062584</X>
							<Y>0.0186352357</Y>
							<Z>-0.00735069066</Z>
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
							<X>31.5741329</X>
							<Y>43.8699532</Y>
							<Z>-2.32495308</Z>
							<R00>0.999933124</R00>
							<R01>-0.000163880613</R01>
							<R02>0.0115660205</R02>
							<R10>0.000173735054</R10>
							<R11>0.999999642</R11>
							<R12>-0.00085101719</R12>
							<R20>-0.0115658771</R20>
							<R21>0.000852969708</R21>
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
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0.117335081</X>
							<Y>0.0588548854</Y>
							<Z>0.0168131758</Z>
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
							<X>31.6377792</X>
							<Y>43.6652756</Y>
							<Z>3.17450666</Z>
							<R00>-0.999933124</R00>
							<R01>0.000163880613</R01>
							<R02>0.0115660205</R02>
							<R10>-0.000173735054</R10>
							<R11>-0.999999642</R11>
							<R12>-0.00085101719</R12>
							<R20>0.0115658771</R20>
							<R21>-0.000852969708</R21>
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
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0.0674753934</X>
							<Y>0.0837464333</Y>
							<Z>0.0183166191</Z>
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
							<X>31.6550941</X>
							<Y>43.8639946</Y>
							<Z>4.67457628</Z>
							<R00>-0.999933124</R00>
							<R01>-0.000163880613</R01>
							<R02>-0.0115660205</R02>
							<R10>-0.000173735054</R10>
							<R11>0.999999642</R11>
							<R12>0.00085101719</R12>
							<R20>0.0115658771</R20>
							<R21>0.000852969708</R21>
							<R22>-0.999932766</R22>
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
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0.049767144</X>
							<Y>0.0905352756</Y>
							<Z>0.0176216792</Z>
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
							<X>32.588028</X>
							<Y>43.3691063</Y>
							<Z>-1.13702607</Z>
							<R00>-0.000163880613</R00>
							<R01>0.0115660205</R01>
							<R02>0.999933124</R02>
							<R10>0.999999642</R10>
							<R11>-0.00085101719</R11>
							<R12>0.000173735054</R12>
							<R20>0.000852969708</R20>
							<R21>0.999932766</R21>
							<R22>-0.0115658771</R22>
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
						<bool name="Locked">true</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">1</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0.113934688</X>
							<Y>0.0803731605</Y>
							<Z>0.0287878234</Z>
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
							<X>32.5834007</X>
							<Y>43.3694458</Y>
							<Z>-1.53699923</Z>
							<R00>-0.000163880613</R00>
							<R01>0.0115660205</R01>
							<R02>0.999933124</R02>
							<R10>0.999999642</R10>
							<R11>-0.00085101719</R11>
							<R12>0.000173735054</R12>
							<R20>0.000852969708</R20>
							<R21>0.999932766</R21>
							<R22>-0.0115658771</R22>
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
						<bool name="Locked">true</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0.117795728</X>
							<Y>0.0785628408</Y>
							<Z>0.0287416186</Z>
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
							<X>29.0513325</X>
							<Y>42.8712196</Y>
							<Z>-4.29675674</Z>
							<R00>0.999933124</R00>
							<R01>-0.000163880613</R01>
							<R02>0.0115660205</R02>
							<R10>0.000173735054</R10>
							<R11>0.999999642</R11>
							<R12>-0.00085101719</R12>
							<R20>-0.0115658771</R20>
							<R21>0.000852969708</R21>
							<R22>0.999932766</R22>
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
						<bool name="Locked">true</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0.152515098</X>
							<Y>0.00958263315</Y>
							<Z>-0.00324070593</Z>
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
							<X>25.5884953</X>
							<Y>43.3678932</Y>
							<Z>-1.05606484</Z>
							<R00>-0.000163880613</R00>
							<R01>0.0115660205</R01>
							<R02>0.999933124</R02>
							<R10>0.999999642</R10>
							<R11>-0.00085101719</R11>
							<R12>0.000173735054</R12>
							<R20>0.000852969708</R20>
							<R21>0.999932766</R21>
							<R22>-0.0115658771</R22>
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
						<bool name="Locked">true</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">1</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0.113171607</X>
							<Y>-0.0322419032</Y>
							<Z>-0.0388710499</Z>
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
							<X>25.583868</X>
							<Y>43.3682327</Y>
							<Z>-1.456038</Z>
							<R00>-0.000163880613</R00>
							<R01>0.0115660205</R01>
							<R02>0.999933124</R02>
							<R10>0.999999642</R10>
							<R11>-0.00085101719</R11>
							<R12>0.000173735054</R12>
							<R20>0.000852969708</R20>
							<R21>0.999932766</R21>
							<R22>-0.0115658771</R22>
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
						<bool name="Locked">true</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0.117032647</X>
							<Y>-0.0340522267</Y>
							<Z>-0.0389172547</Z>
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
							<X>26.638113</X>
							<Y>43.6644058</Y>
							<Z>3.23233604</Z>
							<R00>-0.999933124</R00>
							<R01>0.000163880613</R01>
							<R02>0.0115660205</R02>
							<R10>-0.000173735054</R10>
							<R11>-0.999999642</R11>
							<R12>-0.00085101719</R12>
							<R20>0.0115658771</R20>
							<R21>-0.000852969708</R21>
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
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0.0669303983</X>
							<Y>0.00330710039</Y>
							<Z>-0.0300111305</Z>
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
							<X>29.155262</X>
							<Y>43.8635597</Y>
							<Z>4.70349073</Z>
							<R00>-0.999933124</R00>
							<R01>-0.000163880613</R01>
							<R02>-0.0115660205</R02>
							<R10>-0.000173735054</R10>
							<R11>0.999999642</R11>
							<R12>0.00085101719</R12>
							<R20>0.0115658771</R20>
							<R21>0.000852969708</R21>
							<R22>-0.999932766</R22>
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
						<string name="Name">Part</string>
						<float name="Reflectance">0.5</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0.899999976</float>
						<Vector3 name="Velocity">
							<X>0.0494946465</X>
							<Y>0.050315626</Y>
							<Z>-0.00654218625</Z>
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
							<X>26.6554298</X>
							<Y>43.8631287</Y>
							<Z>4.73240566</Z>
							<R00>-0.999933124</R00>
							<R01>-0.000163880613</R01>
							<R02>-0.0115660205</R02>
							<R10>-0.000173735054</R10>
							<R11>0.999999642</R11>
							<R12>0.00085101719</R12>
							<R20>0.0115658771</R20>
							<R21>0.000852969708</R21>
							<R22>-0.999932766</R22>
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
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0.0492220819</X>
							<Y>0.0100959782</Y>
							<Z>-0.0307060685</Z>
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
							<X>31.6032772</X>
							<Y>42.4678268</Y>
							<Z>0.17368494</Z>
							<R00>0.999933124</R00>
							<R01>-0.000163880613</R01>
							<R02>0.0115660205</R02>
							<R10>0.000173735054</R10>
							<R11>0.999999642</R11>
							<R12>-0.00085101719</R12>
							<R20>-0.0115658771</R20>
							<R21>0.000852969708</R21>
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
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0.11580997</X>
							<Y>0.0701678395</Y>
							<Z>0.0231792983</Z>
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
							<X>29.126543</X>
							<Y>42.6656876</Y>
							<Z>2.20263577</Z>
							<R00>0.999933124</R00>
							<R01>-0.000163880613</R01>
							<R02>0.0115660205</R02>
							<R10>0.000173735054</R10>
							<R11>0.999999642</R11>
							<R12>-0.00085101719</R12>
							<R20>-0.0115658771</R20>
							<R21>0.000852969708</R21>
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
						<string name="Name">Part</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0.0930029005</X>
							<Y>0.0389999226</Y>
							<Z>-0.00162176345</Z>
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
							<X>29.17869</X>
							<Y>42.0618591</Y>
							<Z>6.70182133</Z>
							<R00>0.999933124</R00>
							<R01>-0.000163880613</R01>
							<R02>0.0115660205</R02>
							<R10>0.000173735054</R10>
							<R11>0.999999642</R11>
							<R12>-0.00085101719</R12>
							<R20>-0.0115658771</R20>
							<R21>0.000852969708</R21>
							<R22>0.999932766</R22>
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
						<bool name="Locked">true</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">2</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0.0592547692</X>
							<Y>0.0593652837</Y>
							<Z>0.00150258839</Z>
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
							<X>29.1612091</X>
							<Y>42.8631363</Y>
							<Z>5.20260429</Z>
							<R00>0.999933124</R00>
							<R01>-0.000163880613</R01>
							<R02>0.0115660205</R02>
							<R10>0.000173735054</R10>
							<R11>0.999999642</R11>
							<R12>-0.00085101719</R12>
							<R20>-0.0115658771</R20>
							<R21>0.000852969708</R21>
							<R22>0.999932766</R22>
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
						<bool name="Locked">true</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0.0608157068</X>
							<Y>0.0525774583</Y>
							<Z>-0.00214345939</Z>
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
							<X>29.1555252</X>
							<Y>42.2635612</Y>
							<Z>4.70212603</Z>
							<R00>0.999933124</R00>
							<R01>-0.000163880613</R01>
							<R02>0.0115660205</R02>
							<R10>0.000173735054</R10>
							<R11>0.999999642</R11>
							<R12>-0.00085101719</R12>
							<R20>-0.0115658771</R20>
							<R21>0.000852969708</R21>
							<R22>0.999932766</R22>
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
						<bool name="Locked">true</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">2</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0.0753304288</X>
							<Y>0.0503139496</Y>
							<Z>0.0004033898</Z>
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
							<X>27.1037426</X>
							<Y>41.4670448</Y>
							<Z>0.224878401</Z>
							<R00>0.0115660205</R00>
							<R01>0.000163880613</R01>
							<R02>0.999933124</R02>
							<R10>-0.00085101719</R10>
							<R11>-0.999999642</R11>
							<R12>0.000173735054</R12>
							<R20>0.999932766</R20>
							<R21>-0.000852969708</R21>
							<R22>-0.0115658771</R22>
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
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0.131466836</X>
							<Y>-0.00222859904</Y>
							<Z>-0.0159746855</Z>
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
							<X>31.525835</X>
							<Y>42.1735268</Y>
							<Z>-6.52612066</Z>
							<R00>0.999933124</R00>
							<R01>-0.0115660205</R01>
							<R02>-0.000163880613</R02>
							<R10>0.000173735054</R10>
							<R11>0.00085101719</R11>
							<R12>0.999999642</R12>
							<R20>-0.0115658771</R20>
							<R21>-0.999932766</R21>
							<R22>0.000852969708</R22>
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
						<string name="Name">fr</string>
						<float name="Reflectance">0.300000012</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0.100000001</float>
						<Vector3 name="Velocity">
							<X>0.185326412</X>
							<Y>0.0398448594</Y>
							<Z>0.0237077549</Z>
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
							<X>29.0860806</X>
							<Y>42.5686684</Y>
							<Z>-1.29721451</Z>
							<R00>0.999933124</R00>
							<R01>0.0115660205</R01>
							<R02>0.000163880613</R02>
							<R10>0.000173735054</R10>
							<R11>-0.00085101719</R11>
							<R12>-0.999999642</R12>
							<R20>-0.0115658771</R20>
							<R21>0.999932766</R21>
							<R22>-0.000852969708</R22>
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
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0.128401592</X>
							<Y>0.0231596455</Y>
							<Z>-0.00159190921</Z>
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
							<X>26.6036129</X>
							<Y>42.4669571</Y>
							<Z>0.231514305</Z>
							<R00>0.999933124</R00>
							<R01>-0.000163880613</R01>
							<R02>0.0115660205</R02>
							<R10>0.000173735054</R10>
							<R11>0.999999642</R11>
							<R12>-0.00085101719</R12>
							<R20>-0.0115658771</R20>
							<R21>0.000852969708</R21>
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
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0.115264967</X>
							<Y>-0.0102714635</Y>
							<Z>-0.0251484327</Z>
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
							<X>29.0930195</X>
							<Y>42.5681572</Y>
							<Z>-0.697254837</Z>
							<R00>0.999933124</R00>
							<R01>0.0115660205</R01>
							<R02>0.000163880613</R02>
							<R10>0.000173735054</R10>
							<R11>-0.00085101719</R11>
							<R12>-0.999999642</R12>
							<R20>-0.0115658771</R20>
							<R21>0.999932766</R21>
							<R22>-0.000852969708</R22>
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
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0.122610062</X>
							<Y>0.025875099</Y>
							<Z>-0.00152261276</Z>
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
							<X>29.0341148</X>
							<Y>42.0724983</Y>
							<Z>-5.79733849</Z>
							<R00>0.999933124</R00>
							<R01>-0.000163880613</R01>
							<R02>0.0115660205</R02>
							<R10>0.000173735054</R10>
							<R11>0.999999642</R11>
							<R12>-0.00085101719</R12>
							<R20>-0.0115658771</R20>
							<R21>0.000852969708</R21>
							<R22>0.999932766</R22>
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
						<bool name="Locked">true</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">2</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0.179911822</X>
							<Y>0.00279313279</Y>
							<Z>5.88223338e-005</Z>
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
							<X>29.0514317</X>
							<Y>42.2712212</Y>
							<Z>-4.29726839</Z>
							<R00>0.999933124</R00>
							<R01>-0.000163880613</R01>
							<R02>0.0115660205</R02>
							<R10>0.000173735054</R10>
							<R11>0.999999642</R11>
							<R12>-0.00085101719</R12>
							<R20>-0.0115658771</R20>
							<R21>0.000852969708</R21>
							<R22>0.999932766</R22>
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
						<bool name="Locked">true</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">2</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0.162203506</X>
							<Y>0.00958201382</Y>
							<Z>-0.000636114506</Z>
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
							<X>29.138176</X>
							<Y>42.2648392</Y>
							<Z>3.20222688</Z>
							<R00>0.999933124</R00>
							<R01>-0.000163880613</R01>
							<R02>0.0115660205</R02>
							<R10>0.000173735054</R10>
							<R11>0.999999642</R11>
							<R12>-0.00085101719</R12>
							<R20>-0.0115658771</R20>
							<R21>0.000852969708</R21>
							<R22>0.999932766</R22>
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
						<bool name="Locked">true</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">2</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0.0898092538</X>
							<Y>0.043525286</Y>
							<Z>0.000230130274</Z>
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
							<X>29.068779</X>
							<Y>42.2699432</Y>
							<Z>-2.79736924</Z>
							<R00>0.999933124</R00>
							<R01>-0.000163880613</R01>
							<R02>0.0115660205</R02>
							<R10>0.000173735054</R10>
							<R11>0.999999642</R11>
							<R12>-0.00085101719</R12>
							<R20>-0.0115658771</R20>
							<R21>0.000852969708</R21>
							<R22>0.999932766</R22>
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
						<bool name="Locked">true</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">2</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0.147724673</X>
							<Y>0.0163706448</Y>
							<Z>-0.00046287314</Z>
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
							<X>26.692688</X>
							<Y>42.360405</Y>
							<Z>7.93091106</Z>
							<R00>-0.999933124</R00>
							<R01>0.0115660205</R01>
							<R02>-0.000163880613</R02>
							<R10>-0.000173735054</R10>
							<R11>-0.00085101719</R11>
							<R12>0.999999642</R12>
							<R20>0.0115658771</R20>
							<R21>0.999932766</R21>
							<R22>0.000852969708</R22>
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
						<string name="Name">bl</string>
						<float name="Reflectance">0.300000012</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0.100000001</float>
						<Vector3 name="Velocity">
							<X>0.0425549485</X>
							<Y>0.0245768763</Y>
							<Z>-0.0238249786</Z>
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
							<X>29.1038208</X>
							<Y>40.1673927</Y>
							<Z>0.200637817</Z>
							<R00>0.999933124</R00>
							<R01>-0.000163880613</R01>
							<R02>0.0115660205</R02>
							<R10>0.000173735054</R10>
							<R11>0.999999642</R11>
							<R12>-0.00085101719</R12>
							<R20>-0.0115658771</R20>
							<R21>0.000852969708</R21>
							<R22>0.999932766</R22>
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
						<bool name="Locked">true</bool>
						<token name="Material">256</token>
						<float name="MaxSpeed">40</float>
						<string name="Name">VehicleSeat</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
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
							<X>0.152676433</X>
							<Y>0.0299457405</Y>
							<Z>0.00899967924</Z>
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
							<X>26.5261688</X>
							<Y>42.1726608</Y>
							<Z>-6.46829128</Z>
							<R00>0.999933124</R00>
							<R01>-0.0115660205</R01>
							<R02>-0.000163880613</R02>
							<R10>0.000173735054</R10>
							<R11>0.00085101719</R11>
							<R12>0.999999642</R12>
							<R20>-0.0115658771</R20>
							<R21>-0.999932766</R21>
							<R22>0.000852969708</R22>
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
						<string name="Name">fl</string>
						<float name="Reflectance">0.300000012</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0.100000001</float>
						<Vector3 name="Velocity">
							<X>0.184781358</X>
							<Y>-0.0405944698</Y>
							<Z>-0.0246200114</Z>
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
							<X>31.6923523</X>
							<Y>42.3612709</Y>
							<Z>7.87308216</Z>
							<R00>-0.999933124</R00>
							<R01>0.0115660205</R01>
							<R02>-0.000163880613</R02>
							<R10>-0.000173735054</R10>
							<R11>-0.00085101719</R11>
							<R12>0.999999642</R12>
							<R20>0.0115658771</R20>
							<R21>0.999932766</R21>
							<R22>0.000852969708</R22>
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
						<string name="Name">br</string>
						<float name="Reflectance">0.300000012</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0.100000001</float>
						<Vector3 name="Velocity">
							<X>0.0431000032</X>
							<Y>0.105016179</Y>
							<Z>0.0245027691</Z>
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
							<X>29.1788197</X>
							<Y>41.2618599</Y>
							<Z>6.70113897</Z>
							<R00>0.999933124</R00>
							<R01>0.000163880613</R01>
							<R02>-0.0115660205</R02>
							<R10>0.000173735054</R10>
							<R11>-0.999999642</R11>
							<R12>0.00085101719</R12>
							<R20>-0.0115658771</R20>
							<R21>-0.000852969708</R21>
							<R22>-0.999932766</R22>
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
						<bool name="Locked">true</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0.0721726567</X>
							<Y>0.0593644194</Y>
							<Z>0.00497535989</Z>
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
							<X>31.0517273</X>
							<Y>41.2771149</Y>
							<Z>-4.32117462</Z>
							<R00>0.00705903769</R00>
							<R01>-0.999932587</R01>
							<R02>-0.00921088457</R02>
							<R10>-0.916290224</R10>
							<R11>-0.00277924538</R11>
							<R12>-0.400505185</R12>
							<R20>0.400452584</R20>
							<R21>0.0112670213</R21>
							<R22>-0.916248083</R22>
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
						<bool name="Locked">true</bool>
						<token name="Material">256</token>
						<string name="Name">Tire</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.126207188</X>
							<Y>-0.701787055</Y>
							<Z>0.110565573</Z>
						</Vector3>
						<float name="TopParamA">0</float>
						<float name="TopParamB">0</float>
						<token name="TopSurface">6</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>-1.47270346</X>
							<Y>0.160652682</Y>
							<Z>-0.0965300277</Z>
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
							<Content name="Texture"><url>http://www.emeraldolds.glados.pro/asset/?id=46497811</url></Content>
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
							<X>31.1034737</X>
							<Y>41.4677391</Y>
							<Z>0.178614914</Z>
							<R00>-0.0115660205</R00>
							<R01>0.000163880613</R01>
							<R02>-0.999933124</R02>
							<R10>0.00085101719</R10>
							<R11>-0.999999642</R11>
							<R12>-0.000173735054</R12>
							<R20>-0.999932766</R20>
							<R21>-0.000852969708</R21>
							<R22>0.0115658771</R22>
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
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0.131902859</X>
							<Y>0.0621228367</Y>
							<Z>0.0226875022</Z>
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
							<X>29.1093903</X>
							<Y>41.4669647</Y>
							<Z>0.701713026</Z>
							<R00>0.999933124</R00>
							<R01>-0.000163880613</R01>
							<R02>0.0115660205</R02>
							<R10>0.000173735054</R10>
							<R11>0.999999642</R11>
							<R12>-0.00085101719</R12>
							<R20>-0.0115658771</R20>
							<R21>0.000852969708</R21>
							<R22>0.999932766</R22>
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
						<bool name="Locked">true</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0.126858592</X>
							<Y>0.0322099887</Y>
							<Z>0.00341415801</Z>
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
							<X>27.1557617</X>
							<Y>41.2714005</Y>
							<Z>4.72437286</Z>
							<R00>-0.00840997696</R00>
							<R01>0.999921799</R01>
							<R02>0.00926057994</R02>
							<R10>-0.910399556</R10>
							<R11>-0.0038254261</R11>
							<R12>-0.413712621</R12>
							<R20>-0.413644791</R20>
							<R21>-0.0119100958</R21>
							<R22>0.910360456</R22>
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
						<bool name="Locked">true</bool>
						<token name="Material">256</token>
						<string name="Name">Tire</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>0.120430812</X>
							<Y>0.160970226</Y>
							<Z>-0.224877372</Z>
						</Vector3>
						<float name="TopParamA">0</float>
						<float name="TopParamB">0</float>
						<token name="TopSurface">6</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>-0.836237013</X>
							<Y>-0.180877358</Y>
							<Z>0.019335907</Z>
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
							<Content name="Texture"><url>http://www.emeraldolds.glados.pro/asset/?id=46497811</url></Content>
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
							<X>31.1552734</X>
							<Y>41.2711143</Y>
							<Z>4.67785645</Z>
							<R00>0.000424623489</R00>
							<R01>-0.999924719</R01>
							<R02>-0.0122678429</R02>
							<R10>-0.963390648</R10>
							<R11>-0.00369811058</R11>
							<R12>0.268076271</R12>
							<R20>-0.268101454</R20>
							<R21>0.0117048919</R21>
							<R22>-0.963319659</R22>
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
						<bool name="Locked">true</bool>
						<token name="Material">256</token>
						<string name="Name">Tire</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>0.223102301</X>
							<Y>-0.231851995</Y>
							<Z>-0.42830807</Z>
						</Vector3>
						<float name="TopParamA">0</float>
						<float name="TopParamB">0</float>
						<token name="TopSurface">6</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>-0.505067527</X>
							<Y>0.0447321534</Y>
							<Z>0.00188309513</Z>
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
							<Content name="Texture"><url>http://www.emeraldolds.glados.pro/asset/?id=46497811</url></Content>
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
							<X>27.0505676</X>
							<Y>41.275692</Y>
							<Z>-4.27518463</Z>
							<R00>0.00187021494</R00>
							<R01>0.999930382</R01>
							<R02>0.0116428137</R02>
							<R10>-0.946267128</R10>
							<R11>-0.0019954443</R11>
							<R12>0.323379666</R12>
							<R20>0.323380411</R20>
							<R21>-0.0116219819</R21>
							<R22>0.946197689</R22>
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
						<bool name="Locked">true</bool>
						<token name="Material">256</token>
						<string name="Name">Tire</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.179550767</X>
							<Y>0.041495841</Y>
							<Z>0.147662044</Z>
						</Vector3>
						<float name="TopParamA">0</float>
						<float name="TopParamB">0</float>
						<token name="TopSurface">6</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>-0.400723994</X>
							<Y>0.122638702</Y>
							<Z>0.0456010997</Z>
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
							<Content name="Texture"><url>http://www.emeraldolds.glados.pro/asset/?id=46497811</url></Content>
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
							<X>29.0342464</X>
							<Y>41.2724991</Y>
							<Z>-5.79802084</Z>
							<R00>-0.999933124</R00>
							<R01>0.000163880613</R01>
							<R02>0.0115660205</R02>
							<R10>-0.000173735054</R10>
							<R11>-0.999999642</R11>
							<R12>-0.00085101719</R12>
							<R20>0.0115658771</R20>
							<R21>-0.000852969708</R21>
							<R22>0.999932766</R22>
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
						<bool name="Locked">true</bool>
						<token name="Material">256</token>
						<string name="Name">Part</string>
						<float name="Reflectance">0.100000001</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0.192829713</X>
							<Y>0.00279229577</Y>
							<Z>0.00353161036</Z>
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
							<X>29.1094894</X>
							<Y>40.8669662</Y>
							<Z>0.70120126</Z>
							<R00>0.999933124</R00>
							<R01>-0.000163880613</R01>
							<R02>0.0115660205</R02>
							<R10>0.000173735054</R10>
							<R11>0.999999642</R11>
							<R12>-0.00085101719</R12>
							<R20>-0.0115658771</R20>
							<R21>0.000852969708</R21>
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
						<string name="Name">Part</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00433939882</X>
							<Y>-0.00966695044</Y>
							<Z>0.0161391329</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">2</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0.136546999</X>
							<Y>0.0322093703</Y>
							<Z>0.00601874944</Z>
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
					<X>38</X>
					<Y>40.5</Y>
					<Z>-1</Z>
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
						<X>38</X>
						<Y>40.9000015</Y>
						<Z>-1</Z>
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


