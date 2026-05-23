<roblox xmlns:xmime="http://www.w3.org/2005/05/xmlmime" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="http://www.roblox.com/roblox.xsd" version="4">
	<External>null</External>
	<External>nil</External>
	<Item class="Script" referent="RBX0">
		<Properties>
			<bool name="Disabled">false</bool>
			<Content name="LinkedSource"><null></null></Content>
			<string name="Name">JohnConsole</string>
			<ProtectedString name="Source">print &apos;Admin Console 1.0 Loaded&apos;

--[[

Hio. Make sure you have the latest and greatest version of this tool. Get it at http://ironnoob.com/forums/index.php/board,26.0.html

- John Shedletsky

]]--

-- Install Gui
local copy = script.JohnsConsoleGui:Clone()
--copy.Archivable = false
copy.Parent = game.StarterGui

local lastPing = {} -- {player, ms}


function split(str, delimiter)
  local result = { }
  local from  = 1
  local delim_from, delim_to = string.find( str, delimiter, from  )
  while delim_from do
    table.insert( result, string.sub( str, from , delim_from-1 ) )
    from  = delim_to + 1
    delim_from, delim_to = string.find( str, delimiter, from  )
  end
  table.insert( result, string.sub( str, from  ) )
  return result
end

function getAvgPing()

	local p = game.Players:GetPlayers()
	local total = 0 

	for i=1,#p do
		if lastPing[p[i].Name] ~= nil then
			total = total + lastPing[p[i].Name]
		end
	end

	if #p == 0 then return 0 end

	return total / #p 

end

function incomingMessage(msg)
	if string.sub(msg.Name, 1, 4) == &quot;ping&quot; then
		print(&quot;SERV MSG: &quot; .. msg.Value)
		local args = split(msg.Value, &quot;,&quot;)

		print(&quot;player: &quot; .. args[1] .. &quot;ping: &quot; .. args[2])
		lastPing[args[1]] = args[2]

		local result = getAvgPing()
		print(&quot;avg ping: &quot; .. result)
		msg.Value = &quot;.&quot; .. result
	end
end

script.ChildAdded:connect(incomingMessage)
</ProtectedString>
			<bool name="archivable">true</bool>
		</Properties>
		<Item class="ScreenGui" referent="RBX1">
			<Properties>
				<string name="Name">JohnsConsoleGui</string>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Frame" referent="RBX2">
				<Properties>
					<bool name="Active">false</bool>
					<Color3 name="BackgroundColor3">4288914085</Color3>
					<float name="BackgroundTransparency">0</float>
					<Color3 name="BorderColor3">4279970357</Color3>
					<int name="BorderSizePixel">1</int>
					<string name="Name">Frame</string>
					<UDim2 name="Position">
						<XS>0</XS>
						<XO>5</XO>
						<YS>0.5</YS>
						<YO>0</YO>
					</UDim2>
					<UDim2 name="Size">
						<XS>0</XS>
						<XO>150</XO>
						<YS>0</YS>
						<YO>120</YO>
					</UDim2>
					<token name="SizeConstraint">0</token>
					<bool name="Visible">true</bool>
					<int name="ZIndex">1</int>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="TextLabel" referent="RBX3">
					<Properties>
						<bool name="Active">false</bool>
						<Color3 name="BackgroundColor3">4288914085</Color3>
						<float name="BackgroundTransparency">1</float>
						<Color3 name="BorderColor3">4279970357</Color3>
						<int name="BorderSizePixel">1</int>
						<token name="FontSize">4</token>
						<string name="Name">Ping</string>
						<UDim2 name="Position">
							<XS>0</XS>
							<XO>0</XO>
							<YS>0</YS>
							<YO>20</YO>
						</UDim2>
						<UDim2 name="Size">
							<XS>0</XS>
							<XO>90</XO>
							<YS>0</YS>
							<YO>20</YO>
						</UDim2>
						<token name="SizeConstraint">0</token>
						<string name="Text">Your Ping: xxx ms</string>
						<Color3 name="TextColor3">4294967295</Color3>
						<float name="TextTransparency">0</float>
						<bool name="TextWrap">false</bool>
						<token name="TextXAlignment">0</token>
						<token name="TextYAlignment">1</token>
						<bool name="Visible">true</bool>
						<int name="ZIndex">1</int>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="TextLabel" referent="RBX4">
					<Properties>
						<bool name="Active">false</bool>
						<Color3 name="BackgroundColor3">4288914085</Color3>
						<float name="BackgroundTransparency">1</float>
						<Color3 name="BorderColor3">4279970357</Color3>
						<int name="BorderSizePixel">1</int>
						<token name="FontSize">5</token>
						<string name="Name">Lag Meter</string>
						<UDim2 name="Position">
							<XS>0</XS>
							<XO>0</XO>
							<YS>0</YS>
							<YO>0</YO>
						</UDim2>
						<UDim2 name="Size">
							<XS>0</XS>
							<XO>100</XO>
							<YS>0</YS>
							<YO>15</YO>
						</UDim2>
						<token name="SizeConstraint">0</token>
						<string name="Text">John&apos;s Lag Meter</string>
						<Color3 name="TextColor3">4289331455</Color3>
						<float name="TextTransparency">0</float>
						<bool name="TextWrap">false</bool>
						<token name="TextXAlignment">2</token>
						<token name="TextYAlignment">1</token>
						<bool name="Visible">true</bool>
						<int name="ZIndex">1</int>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="TextLabel" referent="RBX5">
					<Properties>
						<bool name="Active">false</bool>
						<Color3 name="BackgroundColor3">4278255360</Color3>
						<float name="BackgroundTransparency">0</float>
						<Color3 name="BorderColor3">4279970357</Color3>
						<int name="BorderSizePixel">0</int>
						<token name="FontSize">0</token>
						<string name="Name">Bar</string>
						<UDim2 name="Position">
							<XS>0</XS>
							<XO>0</XO>
							<YS>0</YS>
							<YO>65</YO>
						</UDim2>
						<UDim2 name="Size">
							<XS>0</XS>
							<XO>5</XO>
							<YS>0</YS>
							<YO>40</YO>
						</UDim2>
						<token name="SizeConstraint">0</token>
						<string name="Text"></string>
						<Color3 name="TextColor3">4279970357</Color3>
						<float name="TextTransparency">0</float>
						<bool name="TextWrap">false</bool>
						<token name="TextXAlignment">2</token>
						<token name="TextYAlignment">1</token>
						<bool name="Visible">true</bool>
						<int name="ZIndex">1</int>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="TextLabel" referent="RBX6">
					<Properties>
						<bool name="Active">false</bool>
						<Color3 name="BackgroundColor3">4288914085</Color3>
						<float name="BackgroundTransparency">1</float>
						<Color3 name="BorderColor3">4279970357</Color3>
						<int name="BorderSizePixel">1</int>
						<token name="FontSize">4</token>
						<string name="Name">ServerAvg</string>
						<UDim2 name="Position">
							<XS>0</XS>
							<XO>0</XO>
							<YS>0</YS>
							<YO>40</YO>
						</UDim2>
						<UDim2 name="Size">
							<XS>0</XS>
							<XO>90</XO>
							<YS>0</YS>
							<YO>20</YO>
						</UDim2>
						<token name="SizeConstraint">0</token>
						<string name="Text">Server Avg: xxx ms</string>
						<Color3 name="TextColor3">4294967295</Color3>
						<float name="TextTransparency">0</float>
						<bool name="TextWrap">false</bool>
						<token name="TextXAlignment">0</token>
						<token name="TextYAlignment">1</token>
						<bool name="Visible">true</bool>
						<int name="ZIndex">1</int>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="ImageButton" referent="RBX7">
					<Properties>
						<bool name="Active">true</bool>
						<bool name="AutoButtonColor">true</bool>
						<Color3 name="BackgroundColor3">4288914085</Color3>
						<float name="BackgroundTransparency">0</float>
						<Color3 name="BorderColor3">4279970357</Color3>
						<int name="BorderSizePixel">1</int>
						<Content name="Image"><url>http://www.emeraldolds.glados.pro/asset?id=25600854</url></Content>
						<string name="Name">HelpButton</string>
						<UDim2 name="Position">
							<XS>0</XS>
							<XO>115</XO>
							<YS>0</YS>
							<YO>0</YO>
						</UDim2>
						<bool name="Selected">false</bool>
						<UDim2 name="Size">
							<XS>0</XS>
							<XO>20</XO>
							<YS>0</YS>
							<YO>20</YO>
						</UDim2>
						<token name="SizeConstraint">0</token>
						<bool name="Visible">true</bool>
						<int name="ZIndex">1</int>
						<bool name="archivable">true</bool>
					</Properties>
					<Item class="LocalScript" referent="RBX8">
						<Properties>
							<bool name="Disabled">false</bool>
							<Content name="LinkedSource"><null></null></Content>
							<string name="Name">LocalScript</string>
							<ProtectedString name="Source">script.Parent.MouseButton1Click:connect(function() script.Parent.Parent.Parent.HelpFrame.Visible = true end)</ProtectedString>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
			</Item>
			<Item class="LocalScript" referent="RBX9">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">ConsoleManager</string>
					<ProtectedString name="Source">print &apos;Console GUI Manager 1.0 Loading&apos;

local numBars = 20
local cur = 0
local bars = {}
local times = {}

local bar = script.Parent.Frame.Bar:Clone()
script.Parent.Frame.Bar:Remove()


function doPing(lastPing)
	if lastPing == nil then lastPing = 0 end

	local msg = Instance.new(&quot;StringValue&quot;)
	msg.Value = game.Players.LocalPlayer.Name .. &quot;,&quot; .. lastPing
	msg.Name = &quot;ping&quot; .. game.Players.LocalPlayer.userId
	
	local t = time()
	msg.Parent = game.Workspace.JohnConsole

	
	while msg.Value:sub(1,1) ~= &apos;.&apos; do
		wait()
	end
	print(&quot;MSG: &quot; .. msg.Value)

	local avgTime = msg.Value:sub(2)

	local dt = time() - t
	print(dt)

	msg:Remove()

	return dt, avgTime

end

function setup()
	for i = 1, numBars do
		bars[i] = bar:Clone()
		bars[i].Position = UDim2.new(bars[i].Position.X.Scale, i * (bars[i].Size.X.Offset + 1), bars[i].Position.Y.Scale, bars[i].Position.Y.Offset)
		bars[i].Parent = script.Parent.Frame
	end
end

function drawGraph()

	local maxTime = .0001

	for i = cur, cur-numBars, -1 do
		if i == 0 then break end
		if times[i] &gt; maxTime then maxTime = times[i] end
	end

	for i = 1,numBars do

		if cur - i + 1 &lt; 1 then 
			bars[i].BackgroundTransparency = 1
		else
			bars[i].BackgroundTransparency = 0

			bars[i].Size = UDim2.new(bars[i].Size.X.Scale, bars[i].Size.X.Offset, bars[i].Size.Y.Scale, 
				bar.Size.Y.Offset * (times[cur - i + 1] / maxTime))
	
			bars[i].Position = UDim2.new(bars[i].Position.X.Scale, bars[i].Position.X.Offset, bar.Position.Y.Scale,
				bar.Position.Y.Offset + (45 - bars[i].Size.Y.Offset))
	
			local c = Color3.new(0,1,0)
			if times[cur-i+1] &gt; .2 then
				c = Color3.new(1,1,0)
			end
			if times[cur-i+1] &gt; .4 then
				c = Color3.new(1,.5,0)
			end
			if times[cur-i+1] &gt; .6 then
				c = Color3.new(1,0,0)
			end
	
			bars[i].BackgroundColor3 = c
		end

	end
end

setup()

while true do
	wait(1)
	local pingSeconds
	local avgTime

	if times[cur] == nil then print(&quot;times cur nil&quot;) else
	print(&quot;times: &quot; .. times[cur]) end

	pingSeconds, avgTime = doPing(times[cur])

	print(&quot;pingSeconds: &quot; .. pingSeconds)

	

	cur = cur + 1
	times[cur] = pingSeconds
	


	script.Parent.Frame.Ping.Text = &quot;Your Ping: &quot; .. string.format(&quot;%u&quot;,pingSeconds * 1000) .. &quot; ms&quot;
	script.Parent.Frame.ServerAvg.Text = &quot;Server Avg: &quot; .. string.format(&quot;%u&quot;,avgTime * 1000) .. &quot; ms&quot;

	drawGraph()
	
end</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Frame" referent="RBX10">
				<Properties>
					<bool name="Active">false</bool>
					<Color3 name="BackgroundColor3">4288914085</Color3>
					<float name="BackgroundTransparency">0</float>
					<Color3 name="BorderColor3">4279970357</Color3>
					<int name="BorderSizePixel">1</int>
					<string name="Name">HelpFrame</string>
					<UDim2 name="Position">
						<XS>0.5</XS>
						<XO>-300</XO>
						<YS>0.5</YS>
						<YO>-240</YO>
					</UDim2>
					<UDim2 name="Size">
						<XS>0</XS>
						<XO>600</XO>
						<YS>0</YS>
						<YO>480</YO>
					</UDim2>
					<token name="SizeConstraint">0</token>
					<bool name="Visible">false</bool>
					<int name="ZIndex">1</int>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="TextLabel" referent="RBX11">
					<Properties>
						<bool name="Active">false</bool>
						<Color3 name="BackgroundColor3">4288914085</Color3>
						<float name="BackgroundTransparency">1</float>
						<Color3 name="BorderColor3">4279970357</Color3>
						<int name="BorderSizePixel">1</int>
						<token name="FontSize">8</token>
						<string name="Name">Lag Meter</string>
						<UDim2 name="Position">
							<XS>0</XS>
							<XO>0</XO>
							<YS>0</YS>
							<YO>0</YO>
						</UDim2>
						<UDim2 name="Size">
							<XS>1</XS>
							<XO>0</XO>
							<YS>0</YS>
							<YO>30</YO>
						</UDim2>
						<token name="SizeConstraint">0</token>
						<string name="Text">John&apos;s Lag Meter</string>
						<Color3 name="TextColor3">4289331455</Color3>
						<float name="TextTransparency">0</float>
						<bool name="TextWrap">false</bool>
						<token name="TextXAlignment">2</token>
						<token name="TextYAlignment">1</token>
						<bool name="Visible">true</bool>
						<int name="ZIndex">1</int>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="TextLabel" referent="RBX12">
					<Properties>
						<bool name="Active">false</bool>
						<Color3 name="BackgroundColor3">4288914085</Color3>
						<float name="BackgroundTransparency">1</float>
						<Color3 name="BorderColor3">4279970357</Color3>
						<int name="BorderSizePixel">1</int>
						<token name="FontSize">6</token>
						<string name="Name">Version</string>
						<UDim2 name="Position">
							<XS>0</XS>
							<XO>0</XO>
							<YS>0</YS>
							<YO>40</YO>
						</UDim2>
						<UDim2 name="Size">
							<XS>1</XS>
							<XO>0</XO>
							<YS>0</YS>
							<YO>30</YO>
						</UDim2>
						<token name="SizeConstraint">0</token>
						<string name="Text">Version 1.0 ---- Oct 31, 2012</string>
						<Color3 name="TextColor3">4294967295</Color3>
						<float name="TextTransparency">0</float>
						<bool name="TextWrap">false</bool>
						<token name="TextXAlignment">2</token>
						<token name="TextYAlignment">1</token>
						<bool name="Visible">true</bool>
						<int name="ZIndex">1</int>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="TextButton" referent="RBX13">
					<Properties>
						<bool name="Active">true</bool>
						<bool name="AutoButtonColor">true</bool>
						<Color3 name="BackgroundColor3">4289331455</Color3>
						<float name="BackgroundTransparency">0</float>
						<Color3 name="BorderColor3">4279970357</Color3>
						<int name="BorderSizePixel">1</int>
						<token name="FontSize">8</token>
						<string name="Name">OkButton</string>
						<UDim2 name="Position">
							<XS>0</XS>
							<XO>240</XO>
							<YS>0</YS>
							<YO>400</YO>
						</UDim2>
						<bool name="Selected">false</bool>
						<UDim2 name="Size">
							<XS>0</XS>
							<XO>120</XO>
							<YS>0</YS>
							<YO>40</YO>
						</UDim2>
						<token name="SizeConstraint">0</token>
						<string name="Text">Ok</string>
						<Color3 name="TextColor3">4294967295</Color3>
						<float name="TextTransparency">0</float>
						<bool name="TextWrap">false</bool>
						<token name="TextXAlignment">2</token>
						<token name="TextYAlignment">1</token>
						<bool name="Visible">true</bool>
						<int name="ZIndex">1</int>
						<bool name="archivable">true</bool>
					</Properties>
					<Item class="LocalScript" referent="RBX14">
						<Properties>
							<bool name="Disabled">false</bool>
							<Content name="LinkedSource"><null></null></Content>
							<string name="Name">LocalScript</string>
							<ProtectedString name="Source">script.Parent.MouseButton1Click:connect(function() script.Parent.Parent.Visible = false end)</ProtectedString>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
				<Item class="ImageLabel" referent="RBX15">
					<Properties>
						<bool name="Active">false</bool>
						<Color3 name="BackgroundColor3">4288914085</Color3>
						<float name="BackgroundTransparency">1</float>
						<Color3 name="BorderColor3">4279970357</Color3>
						<int name="BorderSizePixel">1</int>
						<Content name="Image"><url>http://www.roblox.com/asset?id=96562773 </url></Content>
						<string name="Name">ImageLabel</string>
						<UDim2 name="Position">
							<XS>0</XS>
							<XO>180</XO>
							<YS>0</YS>
							<YO>100</YO>
						</UDim2>
						<UDim2 name="Size">
							<XS>0</XS>
							<XO>230</XO>
							<YS>0</YS>
							<YO>28</YO>
						</UDim2>
						<token name="SizeConstraint">0</token>
						<bool name="Visible">true</bool>
						<int name="ZIndex">1</int>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="TextLabel" referent="RBX16">
					<Properties>
						<bool name="Active">false</bool>
						<Color3 name="BackgroundColor3">4288914085</Color3>
						<float name="BackgroundTransparency">1</float>
						<Color3 name="BorderColor3">4279970357</Color3>
						<int name="BorderSizePixel">1</int>
						<token name="FontSize">6</token>
						<string name="Name">About1</string>
						<UDim2 name="Position">
							<XS>0</XS>
							<XO>0</XO>
							<YS>0</YS>
							<YO>160</YO>
						</UDim2>
						<UDim2 name="Size">
							<XS>1</XS>
							<XO>0</XO>
							<YS>0</YS>
							<YO>150</YO>
						</UDim2>
						<token name="SizeConstraint">0</token>
						<string name="Text">This tool is designed to help game developers profile the lag in their levels. It shows you two things: 1) your current ping (with a historical graph) and 2) the average ping of all clients attached to the server. Ping is the round-trip time it takes for a</string>
						<Color3 name="TextColor3">4294967295</Color3>
						<float name="TextTransparency">0</float>
						<bool name="TextWrap">false</bool>
						<token name="TextXAlignment">0</token>
						<token name="TextYAlignment">0</token>
						<bool name="Visible">true</bool>
						<int name="ZIndex">1</int>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="TextLabel" referent="RBX17">
					<Properties>
						<bool name="Active">false</bool>
						<Color3 name="BackgroundColor3">4288914085</Color3>
						<float name="BackgroundTransparency">1</float>
						<Color3 name="BorderColor3">4279970357</Color3>
						<int name="BorderSizePixel">1</int>
						<token name="FontSize">6</token>
						<string name="Name">About2</string>
						<UDim2 name="Position">
							<XS>0</XS>
							<XO>0</XO>
							<YS>0</YS>
							<YO>290</YO>
						</UDim2>
						<UDim2 name="Size">
							<XS>1</XS>
							<XO>0</XO>
							<YS>0</YS>
							<YO>150</YO>
						</UDim2>
						<token name="SizeConstraint">0</token>
						<string name="Text">DOWNLOAD your own copy of the lag meter in the &quot;ROBLOX &gt; Free Stuff&quot; subforum at IronNoob.com. Do you have your own handy developer tools that you&apos;re willing to share? Upload them to IronNoob.com!</string>
						<Color3 name="TextColor3">4294967295</Color3>
						<float name="TextTransparency">0</float>
						<bool name="TextWrap">false</bool>
						<token name="TextXAlignment">0</token>
						<token name="TextYAlignment">0</token>
						<bool name="Visible">true</bool>
						<int name="ZIndex">1</int>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
		</Item>
	</Item>
</roblox>


